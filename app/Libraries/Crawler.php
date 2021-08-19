<?php

namespace App\Libraries;

use App\Models\Rate;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\DomCrawler\Crawler as DomCrawler;
use Throwable;

class Crawler
{
    /**
     * URL to crawl data
     */
    const CRAWL_URL = 'https://www.tgju.org/currency';

    /**
     * @var DomCrawler
     */
    protected $crawler;

    /**
     * @var array
     */
    protected $currencies = [];

    /**
     * Create a new instance of the crawler
     *
     * @return Crawler
     */
    public static function instance()
    {
        return new self();
    }

    /**
     * Get a fresh HTTP client
     *
     * @return Client
     */
    public static function http()
    {
        return new Client([
            'timeout' => 10,
            'verify' => false
        ]);
    }

    /**
     * Run the crawler to crawl the website, collect
     * currency rates and store them in the database
     *
     * @return void
     */
    public function run()
    {
        try {
            $this->crawler = $this->crawl();

            $this->process();
        } catch (Throwable $exception) {
            Log::debug($exception->getMessage());
            Log::debug($exception->getTraceAsString());
        }
    }

    /**
     * Crawl the url and return the response
     *
     * @return DomCrawler
     * @throws GuzzleException
     */
    public function crawl()
    {
        $response = ($http = self::http())->get(
            self::CRAWL_URL
        );

        $content = $response->getBody()->getContents();

        return new DomCrawler($content);
    }

    /**
     * Process the extraction of currency rates after
     * crawling is finished
     *
     * @return void
     */
    protected function process()
    {
        /*
         * First try to extract each rate from the
         * target website
         */
        $this->crawler->filter('table.market-table')
            ->each(function (DomCrawler $node, $i) {
                $this->extractRates($node);
            });

        /*
         * Then create rates for each currency
         * based on the crawled prices
         */
        $this->createRates();
    }

    /**
     * Check if content is available
     *
     * @param DomCrawler $node
     * @return bool
     */
    private function hasContent($node)
    {
        return $node->count() > 0;
    }

    /**
     * Extract rates from the tables
     *
     * @param DomCrawler $node
     */
    private function extractRates($node)
    {
        foreach (self::currencies() as $currency) {
            /*
             * Check if currency has already been added to
             * the currencies array and skip the current time
             * if it has
             */
            $alreadyAdded = isset($this->currencies[$currency->name]);

            if ($alreadyAdded) continue;

            /*
             * Then try to get the price from the container box
             * inside the prices table for the given currency
             */
            if ($this->hasContent($element = $node->filter($currency->attribute))) {
                $price = $element->attr('data-price');

                /*
                 * Skip if the price is not valid or it's empty
                 */
                if (!$price) continue;

                /*
                 * Otherwise add it to the currencies list to create
                 * rate records for in the database later
                 */
                $price = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $price = filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

                $this->currencies[$currency->name] = $price;
            }
        }
    }

    /**
     * Get the currencies details array
     *
     * @return array
     */
    public static function currencies()
    {
        return [
            (object)[
                'name' => Rate::CURRENCY_US_DOLLAR,
                'attribute' => '[data-market-row="price_dollar_rl"]'
            ],
            (object)[
                'name' => Rate::CURRENCY_EURO,
                'attribute' => '[data-market-row="price_eur"]'
            ],
            (object)[
                'name' => Rate::CURRENCY_UK_POUND,
                'attribute' => '[data-market-row="price_gbp"]'
            ],
            (object)[
                'name' => Rate::CURRENCY_UAE_DIRHAM,
                'attribute' => '[data-market-row="price_aed"]'
            ],
            (object)[
                'name' => Rate::CURRENCY_CN_YUAN,
                'attribute' => '[data-market-row="price_cny"]'
            ],
        ];
    }

    /**
     * Create rate records based on the extracted prices
     * and currencies
     *
     * @return void
     */
    public function createRates()
    {
        foreach ($this->currencies as $currency => $price) {
            Rate::createRate($currency, $price);
        }
    }
}
