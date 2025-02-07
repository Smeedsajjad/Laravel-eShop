<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminForgotPasswordController;
use App\Http\Controllers\AdminResetPasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::get('/forgot-password', [AdminForgotPasswordController::class, 'showLinkRequestForm'])->name('forgot-password');
    Route::post('/forgot-password', [AdminForgotPasswordController::class, 'sendResetLinkEmail']);

    Route::get('/reset-password/{token}', [AdminResetPasswordController::class, 'showResetForm'])->name('reset-password');
    Route::post('/reset-password', [AdminResetPasswordController::class, 'reset']);

    Route::get('/', function () {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login');
        }
    });

    Route::middleware(['auth:admin', 'admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });
});
