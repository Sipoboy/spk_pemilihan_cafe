<?php

use App\Http\Controllers\Auth\AuthLoginControll;
use App\Http\Controllers\LandingPageController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
    Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
    Route::get('/data-cafe', [LandingPageController::class, 'datacafe'])->name('cafe.index');
    Route::get('/hasil-spk', [LandingPageController::class, 'hasilspk'])->name('spk.index');
    Route::get('/login-admin-spk', [AuthLoginControll::class, 'index'])->name('login');
});