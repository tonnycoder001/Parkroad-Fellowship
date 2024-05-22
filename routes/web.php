<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PrayerRequestController;




Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/budget', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/budget', [BudgetController::class, 'store'])->name('budget.store');


Route::get('/mission', [MissionController::class, 'create'])->name('event.create');
Route::post('/mission', [MissionController::class, 'store'])->name('event.store');


Route::get('/prayer-request', [PrayerRequestController::class, 'create'])->name('prayer_request.create');
Route::post('/prayer-request', [PrayerRequestController::class, 'store'])->name('prayer_request.store');
