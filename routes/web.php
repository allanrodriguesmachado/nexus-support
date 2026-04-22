<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\TechnicalController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');

    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    route::post('/register/store', [RegisteredUserController::class, 'store'])->name('register.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/technical/create', [TechnicalController::class, 'create'])->name('technical.create');
    Route::post('/technical/store', [TechnicalController::class, 'store'])->name('technical.store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
