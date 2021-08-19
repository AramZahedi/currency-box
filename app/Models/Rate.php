<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    /**
     * Available currencies
     */
    const CURRENCY_US_DOLLAR = 'usd';
    const CURRENCY_EURO = 'eur';
    const CURRENCY_UK_POUND = 'gbp';
    const CURRENCY_UAE_DIRHAM = 'aed';
    const CURRENCY_CN_YUAN = 'cny';

    /**
     * Mass-assignable attributes
     *
     * @var array
     */
    protected $fillable = [
        'currency', 'price'
    ];

    /**
     * Create a new rate for the given currency
     *
     * @param string $currency
     * @param float $price
     * @return Rate|Model
     */
    public static function createRate(string $currency, float $price)
    {
        return self::create([
            'currency' => $currency,
            'price' => $price
        ]);
    }
}
