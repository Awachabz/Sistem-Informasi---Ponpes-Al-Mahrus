<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;

// ======================
// 🔹 HALAMAN PUBLIK (tanpa login)
// ======================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/album', [HomeController::class, 'album'])->name('album');
Route::get('/rotinan', [HomeController::class, 'rotinan'])->name('rotinan');

// ======================
// 🔹 LOGIN & REGISTER (bisa diakses tanpa login)
// ======================
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// ======================
// 🔹 USER (role: user)
// ======================
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ======================
// 🔹 ADMIN (role: admin)
// ======================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
Route::get('/admin/pending', [AdminController::class, 'pendingUsers'])->name('admin.pending');
    Route::post('/admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
});

// ======================
// 🔹 LOGOUT
// ======================
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// ======================
// 🔹 Auth scaffolding (Laravel Breeze/Fortify)
// ======================
require __DIR__ . '/auth.php';

Route::view('/tentang', 'tentang')->name('tentang');


// Rotinan
Route::get('/rotinan/kamilah', function () {
    return view('rotinan.kamilah');
})->name('kamilah');

Route::get('/rotinan/nurzati', function () {
    return view('rotinan.nurzati');
})->name('nurzati');

Route::get('/rotinan/anilqodr', function () {
    return view('rotinan.anilqodr');
})->name('anilqodr');

Route::get('/rotinan/surat yasiin', function () {
    return view('rotinan.yasiin');
})->name('surat yasiin');

Route::get('/rotinan/alwakiah', function () {
    return view('rotinan.alwakiah');
})->name('alwakiah');

Route::get('/rotinan/almulk', function () {
    return view('rotinan.almulk');
})->name('almulk');