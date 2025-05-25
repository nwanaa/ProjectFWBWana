<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\UKMController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//login dan register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/register', function () {
    return view('auth.register');
})->name('register');

//ukm
Route::resource('ukm', UKMController::class);
Route::resource('kegiatan', KegiatanController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');