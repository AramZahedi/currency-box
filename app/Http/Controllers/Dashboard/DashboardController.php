<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DashboardController extends Controller
{
    /**
     * Show the application index page
     *
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard.index.index', [
            'usd' => $this->getUsd(),
            'eur' => $this->getEur(),
            'gbp' => $this->getGbp(),
            'aed' => $this->getAed(),
            'cny' => $this->getCny(),
        ]);
    }

    /**
     * Get the last rate of USD
     *
     * @return Rate|Builder|Model|object|null
     */
    protected function getUsd()
    {
        return Rate::query()
            ->latest()
            ->currency(Rate::CURRENCY_US_DOLLAR)
            ->first();
    }

    /**
     * Get the last rate of EUR
     *
     * @return Rate|Builder|Model|object|null
     */
    protected function getEur()
    {
        return Rate::query()
            ->latest()
            ->currency(Rate::CURRENCY_EURO)
            ->first();
    }

    /**
     * Get the last rate of GBP
     *
     * @return Rate|Builder|Model|object|null
     */
    protected function getGbp()
    {
        return Rate::query()
            ->latest()
            ->currency(Rate::CURRENCY_UK_POUND)
            ->first();
    }

    /**
     * Get the last rate of AED
     *
     * @return Rate|Builder|Model|object|null
     */
    protected function getAed()
    {
        return Rate::query()
            ->latest()
            ->currency(Rate::CURRENCY_UAE_DIRHAM)
            ->first();
    }

    /**
     * Get the last rate of CNY
     *
     * @return Rate|Builder|Model|object|null
     */
    protected function getCny()
    {
        return Rate::query()
            ->latest()
            ->currency(Rate::CURRENCY_CN_YUAN)
            ->first();
    }
}
