<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = Rate::currencies();
        $currenciesCount = count($currencies);

        $usd = 1;
        $gbp = 1.36;
        $eur = 1.17;
        $aed = 0.27;
        $cny = 0.16;

        for ($i = 0; $i < 50; $i++) {
            $data = [];

            for ($j = 0; $j < 500; $j++) {
                $currency = $currencies[rand(0, $currenciesCount - 1)];

                $randomUsdPrice = rand(260000, 290000);
                $randomTime = now()->subDays(20)->addDays(rand(0, 20))
                    ->subSeconds(rand(0, 86400));

                $data[] = [
                    'price' => round($randomUsdPrice * $$currency, -1),
                    'currency' => $currency,
                    'created_at' => $randomTime,
                    'updated_at' => $randomTime
                ];
            }

            Rate::insert($data);
        }
    }
}
