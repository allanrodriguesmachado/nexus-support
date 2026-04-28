<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\CallingsController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\TechnicalController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', LoginController::class)->name('auth');

    Route::get('/register', RegisterController::class)->name('register.create');
    route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::middleware(['role:technical'])->group(function () {
        Route::get('/technical/create', [TechnicalController::class, 'create'])->name('technical.create');
    });

    Route::middleware(['role:client'])->group(function () {
        Route::get('/callings', [CallingsController::class, 'create'])->name('callings.create');
        Route::post('/callings/store', [CallingsController::class, 'store'])->name('callings.store');
        Route::get('/callings/list', [CallingsController::class, 'show'])->name('callings.show');
    });
});
