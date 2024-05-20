<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::POST('/register', [RegisterController::class, 'register']);
