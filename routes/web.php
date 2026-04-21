<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');

    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
   Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
   route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
});


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
