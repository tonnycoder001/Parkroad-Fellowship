<?php

use App\Models\MissionReport;
use App\Models\MissionAssignment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\MissionAssignmentController;

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/budget', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/admin-dashboard/budget', [BudgetController::class, 'store'])->name('budget.store');



Route::get('/mission', [MissionController::class, 'create'])->name('mission.create');
Route::post('/admin-dashboard/mission', [MissionController::class, 'store'])->name('mission.store');

// Route::get('/mission', [MissionController::class, 'create'])->name('event.create');
// Route::post('/admin-dashboard//mission', [MissionController::class, 'store'])->name('event.store');


Route::get('/prayer-request', [PrayerRequestController::class, 'create'])->name('prayer_request.create');
Route::post('/admin-dashboard//prayer-request', [PrayerRequestController::class, 'store'])->name('prayer_request.store');

Route::get('/mission-assignment', [MissionAssignmentController::class, 'create'])->name('mission_assignment.create');
// Route::post('admin-dashboard//mission-assignment', [MissionAssignmentController::class, 'store'])->name('mission_assignment.store');

Route::get('/mission-report', [MissionReport::class, 'create'])->name('mission-report.create');
// Route::post('admin-dashboard//mission-assignment', [MissionAssignmentController::class, 'store'])->name('mission_assignment.store');
