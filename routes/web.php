<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [AuthController::class, 'index'])->name('screen.login');
Route::post('/auth', AuthController::class)->name('login');
