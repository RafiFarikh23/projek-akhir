<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LapanganController;


// ==========================================
// LANDING PAGE
// ==========================================

Route::get('/', function () {
    return view('landing');
})->name('landing');


// ==========================================
// LOGIN
// ==========================================

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// ==========================================
// LAPANGAN PUBLIC
// ==========================================

Route::get('/lapangan', [LapanganController::class, 'index'])
    ->name('admin.lapangan.index');


// ==========================================
// ADMIN
// ==========================================

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'admin'])
            ->name('admin.dashboard');

        Route::resource('lapangan', LapanganController::class);

    });


// ==========================================
// PELANGGAN
// ==========================================

Route::middleware(['auth', 'pelanggan'])
    ->prefix('pelanggan')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'pelanggan'])
            ->name('pelanggan.dashboard');

    });