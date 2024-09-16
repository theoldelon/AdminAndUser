<?php

use App\Http\Controllers\admin\DashBoardController as AdminDashBoardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route for homepage
Route::get('/', function () {
    return view('home');
});

// Group routes under 'account' prefix
Route::prefix('account')->group(function () {
    // Routes for guests (not authenticated users)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('account.login');
        Route::post('/processRegister', [LoginController::class, 'processRegister'])->name('account.processRegister');
        Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::get('/register', [LoginController::class, 'register'])->name('account.register');
    });

    // Routes for authenticated users
    Route::middleware('auth')->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});

// Group routes under 'admin' prefix
Route::prefix('admin')->group(function () {
    // Routes for guests (not authenticated users)
    Route::middleware('admin.guest')->group(function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    // Routes for authenticated users
    Route::middleware('admin.auth')->group(function () {
        Route::get('dashboard', [AdminDashBoardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});
