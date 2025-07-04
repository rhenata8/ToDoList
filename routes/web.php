<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/home', [TaskController::class, 'home'])->name('home');
    Route::get('/tugas', [TaskController::class, 'calendar'])->name('calendar');
    Route::post('/tugas', [TaskController::class, 'store']);
    Route::get('/akun', [AuthController::class, 'profile'])->name('akun');
});
