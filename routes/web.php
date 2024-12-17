<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\GolonganController;

// Route untuk halaman umum (bebas diakses)
Route::get('/', function () {
    return view('login', ['title' => 'Login']);
})->name('root');

Route::get('/about', function () {
    return view('about', ['title' => 'Tentang']);
});

Route::get('/category', function () {
    return view('category', ['title' => 'Kategori']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});
Route::get('/pelanggan', function () {
    return view('pelanggan', ['title' => 'pelanggan']);
});


// Middleware untuk pengguna yang belum login (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// Middleware untuk pengguna yang sudah login (auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home', ['title' => 'Home']);
    })->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('/pelanggan', [PelangganController::class, 'pelanggan'])->name('pelanggan');

// Anda juga bisa menambahkan route lainnya untuk CRUD (tambah, edit, hapus)
Route::get('/pelanggan/tambah', [PelangganController::class, 'tambah']);
Route::post('/pelanggan/tambah', [PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::post('/pelanggan/edit/{id}', [PelangganController::class, 'update']);
Route::get('/pelanggan/hapus/{id}', [PelangganController::class, 'hapus']);


Route::resource('golongan', GolonganController::class)->except(['show']);

