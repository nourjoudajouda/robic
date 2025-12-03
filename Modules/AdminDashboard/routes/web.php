<?php

use Illuminate\Support\Facades\Route;
use Modules\AdminDashboard\Http\Controllers\AdminDashboardController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('admindashboards', AdminDashboardController::class)->names('admindashboard');
});

Route::middleware(['web','auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', fn () => view('admindashboard::dashboard.index'))->name('admin.dashboard');
});
