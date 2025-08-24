<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\AuthApiController;
use App\Http\Controllers\Api\HomeApiController;


// Home


// Open
Route::post('/register', [AuthApiController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthApiController::class, 'login'])->name('auth.login');
Route::get('/login-form', [AuthApiController::class, 'loginForm'])->name('auth.loginForm');
Route::post('/verify-email', [AuthApiController::class, 'verifyEmail'])->name('auth.verifyEmail');
Route::get('/refresh_token', [AuthApiController::class, 'refreshToken']);

// Protected
Route::group([
    "middleware" => "auth:api"
], function () {
    Route::get('/profile', [AuthApiController::class, 'profile']);
    Route::post('/logout', [AuthApiController::class, 'logout']);
});
