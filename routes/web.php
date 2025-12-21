<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\NotificationController;


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
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// ======================
// 🔹 USER (role: user)
// ======================
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});

// ======================
// 🔹 ADMIN (role: admin)
// ======================
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin/dashboard'))->name('admin/dashboard');

    Route::get('/admin/pending', [AdminController::class, 'pendingUsers'])->name('admin.pending');
    Route::post('/admin/approve/{id}', [AdminController::class, 'approve'])->name('admin.approve');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
});


// PROFIL ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/profile', [ProfilController::class, 'adminProfile'])->name('admin.profile');
});

// PROFIL USER
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/profile', [ProfilController::class, 'userProfile'])->name('user.profile');
});

// PROSES UPDATE (untuk semua)
Route::middleware(['auth'])->group(function () {
    Route::post('/profile/update', [ProfilController::class, 'update'])->name('profile.update');
    Route::post('/profile/photo', [ProfilController::class, 'updatePhoto'])->name('profile.photo');
    Route::post('/profile/password', [ProfilController::class, 'updatePassword'])->name('profile.password');
});



// ======================
// ALBUM
// ======================
Route::get('/album', [AlbumController::class, 'index'])->name('album.index');

Route::middleware(['auth'])->group(function () {
    Route::post('/album', [AlbumController::class, 'store'])->name('album.store');
    Route::get('/album/{id}/edit', [AlbumController::class, 'edit'])->name('album.edit');
    Route::put('/album/{id}', [AlbumController::class, 'update'])->name('album.update');
    Route::delete('/album/{id}', [AlbumController::class, 'destroy'])->name('album.destroy');
});

// =====================
// Komentar & Like
// =====================
Route::middleware('auth')->group(function () {
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');

    Route::post('/album/{album}/like', [LikeController::class, 'toggle'])->name('album.like');
});

// ========== STRUKTUR ===========
Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur.index');

Route::middleware(['auth'])->group(function () {
    Route::post('/struktur', [StrukturController::class, 'store'])->name('struktur.store');
    Route::get('/struktur/{id}/edit', [StrukturController::class, 'edit'])->name('struktur.edit');
    Route::put('/struktur/{id}', [StrukturController::class, 'update'])->name('struktur.update');
    Route::delete('/struktur/{id}', [StrukturController::class, 'destroy'])->name('struktur.destroy');
});

// ========= Rotinan ============
Route::get('/rotinan/kamilah', fn() => view('rotinan.kamilah'))->name('kamilah');
Route::get('/rotinan/nurzati', fn() => view('rotinan.nurzati'))->name('nurzati');
Route::get('/rotinan/anilqodr', fn() => view('rotinan.anilqodr'))->name('anilqodr');
Route::get('/rotinan/surat-yasiin', fn() => view('rotinan.yasiin'))->name('surat_yasiin');
Route::get('/rotinan/al-wakiah', fn() => view('rotinan.alwakiah'))->name('alwakiah');
Route::get('/rotinan/al-mulk', fn() => view('rotinan.almulk'))->name('almulk');
Route::get('/rotinan/lamyahtalim', fn() => view('rotinan.lamyahtalim'))->name('lamyahtalim');


// ===== NOTIFIKASI =====

// semua user
Route::get('/notification/list', [NotificationController::class, 'list'])
    ->name('notification.list');

Route::get('/notification/count', [NotificationController::class, 'count'])
    ->name('notification.count');

// hapus notif
Route::delete('/notification/{id}', [NotificationController::class, 'destroy'])
    ->name('notification.destroy');

Route::delete('/notification-delete-all', [NotificationController::class, 'deleteAll'])
    ->name('notification.deleteAll');

// admin only
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/notifikasi/create', [NotificationController::class, 'create'])
        ->name('notif-create');

    Route::post('/notification/store', [NotificationController::class, 'store'])
        ->name('notification.store');
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
