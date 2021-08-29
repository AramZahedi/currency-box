<?php

use App\Http\Controllers\Dashboard\ChartDataController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardSummaryController;

/*
 **************************************************
 *                 User Dashboard
 **************************************************
 */
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    /*
     **************************************************
     *                Dashboard Index
     **************************************************
     */
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard.index');

    /*
     **************************************************
     *                 Dashboard Chart
     **************************************************
     */
    Route::prefix('/chart')->group(function() {
        /*
         **************************************************
         *                Fetch Chart Data
         **************************************************
         */
        Route::get('/', [ChartDataController::class, 'index'])
            ->name('dashboard.chart.index');
    });
});
