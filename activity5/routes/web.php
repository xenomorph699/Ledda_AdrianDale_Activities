<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
})->name('Auth.login');

Route::get('/signup', function () {
    return view('Auth.signup');
})->name('signup');

Route::post('/create', [SignUpController::class, 'create'])->name('register');

Route::get('/login', [SignInController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SignInController::class, 'login']);
Route::post('/logout', [SignInController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');