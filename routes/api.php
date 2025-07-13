<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


// Open
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/login-form', [AuthController::class, 'loginForm'])->name('auth.loginForm');
Route::post('/verify-email', [AuthController::class, 'verifyEmail'])->name('auth.verifyEmail');

// Protected
Route::group([
    "middleware" => "auth:api"
], function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::get('/refresh_token', [AuthController::class, 'refreshToken']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
