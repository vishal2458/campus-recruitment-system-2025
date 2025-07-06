<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;


// Open
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/loginform', [AuthController::class, 'loginform'])->name('login');


// Protected
Route::group([
    "middleware" => "auth:api"
], function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::get('/refresh_token', [AuthController::class, 'refreshToken']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
