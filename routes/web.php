<?php

use App\Models\MissionAssignment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MissionReportController;
use App\Http\Controllers\PrayerRequestController;
use App\Http\Controllers\MissionAssignmentController;

Route::get('/admin.admin-dashboard', function () {
    return view('admin.admin-dashboard');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/admin.budget', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/admin-dashboard/budget', [BudgetController::class, 'store'])->name('budget.store');



Route::get('/admin.mission', [MissionController::class, 'create'])->name('mission.create');
Route::post('/admin-dashboard/mission', [MissionController::class, 'store'])->name('mission.store');


Route::get('/admin.prayer-request', [PrayerRequestController::class, 'create'])->name('prayer-request.create');
Route::post('/admin.prayer-request', [PrayerRequestController::class, 'store'])->name('prayer-request.store');


Route::get('/admin.mission-assignment', [MissionAssignmentController::class, 'create'])->name('mission_assignment.create');


Route::get('/admin.mission-report', [MissionReportController::class, 'create'])->name('mission-report.create');
Route::post('/admin.mission-report', [MissionReportController::class, 'store'])->name('mission-report.store');
