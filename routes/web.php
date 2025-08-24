<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;

// Home
Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/admin',[HomeController::class, 'admin'])->name('admin.admin');
Route::get('/student',[HomeController::class, 'student'])->name('home.student');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('home.dashboard');
Route::get('/register', [HomeController::class, 'registrationForm'])->name('home.reg');
Route::get('/login', [HomeController::class, 'loginForm'])->name('home.login');
