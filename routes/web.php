<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


//No auth routes
Route::get('/', [DashboardController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    //Auth routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

