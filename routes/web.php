<?php

use App\Http\Controllers\AdminUKMController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendaftaranKegiatanController;
use App\Http\Controllers\PendaftaranUKMController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UKMController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;

// =====================
// LANDING
// =====================
Route::get('/', function () {
    return view('welcome');
});

// =====================
// AUTH
// =====================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =====================
// DASHBOARD UMUM
// =====================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// =====================
// ADMIN AREA
// =====================
Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/admin/ukm', [AdminUKMController::class, 'index'])->name('admin.ukm.index');
    Route::get('/admin/ukm/{id}/edit', [AdminUKMController::class, 'edit'])->name('admin.ukm.edit');
    Route::put('/admin/ukm/{id}', [AdminUKMController::class, 'update'])->name('admin.ukm.update');
    Route::delete('/admin/ukm/{id}', [AdminUKMController::class, 'destroy'])->name('admin.ukm.destroy');

    
});

Route::middleware(['auth', CheckRole::class . ':admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
});



// =====================
// PENGURUS AREA
// =====================
Route::middleware(['auth', CheckRole::class . ':pengurus'])->group(function () {
    Route::get('/dashboard/pengurus', function () {
        return view('dashboard.pengurus');
    })->name('dashboard.pengurus');
});

// =====================
// PENGURUS & ADMIN: UKM & KEGIATAN
// =====================
Route::middleware(['auth', CheckRole::class . ':pengurus,admin'])->group(function () {
    Route::resource('ukm', UKMController::class);
    Route::resource('kegiatan', KegiatanController::class);
});

// =====================
// MAHASISWA AREA
// =====================
Route::middleware(['auth', CheckRole::class . ':mahasiswa'])->group(function () {
    Route::get('/dashboard/mahasiswa', function () {
        return view('dashboard.mahasiswa');
    })->name('dashboard.mahasiswa');

    // UKM Mahasiswa
    Route::get('/ukm-mahasiswa', [PendaftaranUKMController::class, 'index'])->name('ukm.mahasiswa');
    Route::post('/ukm-mahasiswa/daftar/{id}', [PendaftaranUKMController::class, 'daftar'])->name('ukm.daftar');

    // Kegiatan Mahasiswa
    Route::get('/kegiatan-mahasiswa', [PendaftaranKegiatanController::class, 'index'])->name('kegiatan.mahasiswa');
    Route::post('/kegiatan-mahasiswa/daftar/{id}', [PendaftaranKegiatanController::class, 'daftar'])->name('kegiatan.daftar');
});


//profile
Route::middleware('auth')->group(function () {
    Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
});
