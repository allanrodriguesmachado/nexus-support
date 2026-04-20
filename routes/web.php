<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\TechnicalController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');

    Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

   Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
   route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
});

Route::middleware('guest')->group(function () {

});

//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::get('/kanban', function () {
//        return view('kanban');
//    })->name('kanban');
//
//    Route::get('/ticket', function () {
//        return view('client.ticket');
//    })->name('client.ticket');
//
//    Route::get('/technical/create', [TechnicalController::class, 'create'])->name('technical.create');
//});
