<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\TechnicalController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/auth', LoginController::class)->name('auth');

    Route::get('/register', RegisterController::class)->name('register.create');
    route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/technical/create', [TechnicalController::class, 'create'])->name('technical.create');
//    Route::post('/technical/store', [RegisterController::class, 'registerAdminOrTechnical'])->name('register.admin.store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
