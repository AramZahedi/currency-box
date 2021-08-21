<?php

/*
 **************************************************
 *                 User Dashboard
 **************************************************
 */

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardSummaryController;

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
     *                Dashboard Summary
     **************************************************
     */
    Route::get('/summary', [DashboardSummaryController::class, 'summary'])
        ->name('dashboard.summary');
});
