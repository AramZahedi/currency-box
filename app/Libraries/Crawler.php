<?php

namespace App\Libraries;

use GuzzleHttp\Client;
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
     * Content Crawler
     */
    public function getCrawlerContent()
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
     * @throws \GuzzleHttp\Exception\GuzzleException
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
        $this->crawler->filter('table.market-table')
            ->each(function (DomCrawler $node, $i) {
                $this->extractRates($node);
            });

        // TODO: store in the database instead of logging
        Log::info(print_r($this->currencies, true));
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
        if (
            !isset($this->currencies['usd'])
            && $this->hasContent($usd = $node->filter('[data-market-row="price_dollar_rl"]'))
        ) {
            $this->currencies['usd'] = $usd->attr('data-price');
        }

        if (
            !isset($this->currencies['eur'])
            && $this->hasContent($eur = $node->filter('[data-market-row="price_eur"]'))
        ) {
            $this->currencies['eur'] = $eur->attr('data-price');
        }

        if (
            !isset($this->currencies['gbp'])
            && $this->hasContent($gbp = $node->filter('[data-market-row="price_gbp"]'))
        ) {
            $this->currencies['gbp'] = $gbp->attr('data-price');
        }

        if (
            !isset($this->currencies['aed'])
            && $this->hasContent($aed = $node->filter('[data-market-row="price_aed"]'))
        ) {
            $this->currencies['aed'] = $aed->attr('data-price');
        }

        if (
            !isset($this->currencies['cny'])
            && $this->hasContent($cny = $node->filter('[data-market-row="price_cny"]'))
        ) {
            $this->currencies['cny'] = $cny->attr('data-price');
        }
    }
}
