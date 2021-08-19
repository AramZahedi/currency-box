<?php

/*
 **************************************************
 *                 User Dashboard
 **************************************************
 */

use App\Http\Controllers\Dashboard\DashboardController;

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    /*
     **************************************************
     *                Dashboard Index
     **************************************************
     */
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard.index');
});
