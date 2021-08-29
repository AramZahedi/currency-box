<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ChartDataRequest;
use App\Models\Rate;
use Carbon\Carbon;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ChartDataController extends Controller
{
    /**
     * Get the chart data for different currencies
     * from the database
     *
     * @param ChartDataRequest $request
     * @return ResponseFactory|Response
     */
    public function index(ChartDataRequest $request)
    {
        return $this->dataResponse([
            'currencies' => $this->getValues($request),
            'labels' => $this->getLabels($request)
        ]);
    }

    /**
     * Get the chart labels based on the provided
     * date in the request
     *
     * @param ChartDataRequest $request
     * @return array
     */
    protected function getLabels($request)
    {
        $labels = [];

        /*
         * Start the time from the beginning of today, or
         * the start of the given date in the request if passed
         */
        $time = ($date = $request->get('date'))
            ? new Carbon($date)
            : now()->startOfDay();

        for ($i = 0; $i < 24; $i++) {
            $labels[] = $time->format('ga') . ' - '
                . (clone $time)->addHour()->format('ga');

            $time->addHour();
        }

        return $labels;
    }

    /**
     * Get rate for the given currency
     * based on the provided date in the request
     *
     * @param ChartDataRequest $request
     * @return array
     */
    protected function getValues($request)
    {
        $chartRates = [];

        /*
         * Start the time from the beginning of today, or
         * the start of the given date in the request if passed
         */
        $time = ($date = $request->get('date'))
            ? new Carbon($date)
            : now()->startOfDay();

        /*
         * Then run a loop to extract price for each hour in a
         * 24 hour time period
         */
        for ($i = 0; $i < 24; $i++) {
            $currencies = Rate::currencies();

            $rates = Rate::query()
                ->fromSub(
                /*
                 * We defined a sub query to first get the last "created_at"
                 * time for each currency in the current time range (from the
                 * start of the current hour to the end of the current hour)
                 */
                    Rate::query()
                        ->select([
                            DB::raw('max(created_at) as latest_time'),
                            'currency'
                        ])
                        ->whereIn('currency', $currencies)
                        ->where('created_at', '>=', $time)
                        ->where('created_at', '<', (clone $time)->addHour())
                        ->groupBy('currency')
                    , 'sub')
                ->join('rates', function ($query) {
                    return $query
                        ->whereRaw('`rates`.`created_at` = `sub`.`latest_time`')
                        ->whereRaw('`rates`.`currency` = `sub`.`currency`');
                })
                /*
                 * Now we select the needed columns from rates table
                 */
                ->select([
                    'rates.price', 'rates.created_at',
                    'rates.currency',
                ])
                ->get();

            /*
             * We iterate over the currencies to get the rate of each
             * currency from the fetched data from the database
             */
            foreach ($currencies as $currency) {
                /*
                 * Fetch the rate for the current looping currency
                 */
                $rateOfCurrency = $rates->first(function ($item) use ($currency) {
                    return $item->currency == $currency;
                });

                if ($rateOfCurrency) {
                    /*
                     * Add the fetched rate if there is one
                     */
                    $chartRates[$currency][] = $rateOfCurrency->price / 10; // convert from Rial to Toman
                } else {
                    /*
                     * Otherwise add 0 as a placeholder
                     */
                    $chartRates[$currency][] = 0;
                }
            }

            /*
             * Then add one hour to the time for the next iteration
             */
            $time->addHour();
        }

        return $chartRates;
    }
}
