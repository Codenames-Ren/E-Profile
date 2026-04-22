<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/', fn() => view('home'));
Route::get('/profil', fn() => view('profil'));
Route::get('/galeri', fn() => view('galeri'));
Route::get('/kontak', fn() => view('kontak'));

Route::get('/login', fn() => view('login'));

Route::get('/admin', fn() => view('admin.dashboard'));
Route::get('/admin/siswa', fn() => view('admin.siswa'));
Route::get('/admin/verifikasi', fn() => view('admin.verifikasi'));
// require __DIR__.'/auth.php';
