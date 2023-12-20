<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/edit', [EditController::class, 'edit'])->name('edit');
    Route::post('/updateAbout', [EditController::class, 'updateAbout'])->name('about.update');
    Route::post('/updateWork', [EditController::class, 'updateWork'])->name('work.update');
    Route::get('/delete/{id}', [EditController::class, 'deleteWork'])->name('work.delete');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
