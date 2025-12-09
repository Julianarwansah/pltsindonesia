<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Produk Frontend Routes
Route::prefix('produk')->group(function () {
    Route::get('/', [ProdukController::class, 'list'])->name('produk.list');
    Route::get('/search', [ProdukController::class, 'searchFrontend'])->name('produk.search');
    Route::get('/terlaris', [ProdukController::class, 'terlaris'])->name('produk.terlaris');
    Route::get('/rekomendasi', [ProdukController::class, 'rekomendasi'])->name('produk.rekomendasi');
    Route::get('/{slug}', [ProdukController::class, 'detail'])->name('produk.detail');
});

// Artikel Frontend Routes
Route::prefix('artikel')->group(function () {
    Route::get('/', [ArtikelController::class, 'list'])->name('artikel.list');
    Route::get('/{slug}', [ArtikelController::class, 'detail'])->name('artikel.detail');
    Route::get('/tag/{tag}', [ArtikelController::class, 'byTag'])->name('artikel.tag');
    Route::get('/author/{id}', [ArtikelController::class, 'byAuthor'])->name('artikel.author');
    Route::get('/popular', [ArtikelController::class, 'popular'])->name('artikel.popular');
});

// Static Pages
Route::get('/tentang', [\App\Http\Controllers\TentangController::class, 'index'])->name('tentang');
Route::view('/kontak', 'kontak')->name('kontak');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes dengan middleware yang benar
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource Routes
    Route::resource('artikels', ArtikelController::class);
    Route::resource('kategori-produks', \App\Http\Controllers\KategoriProdukController::class);
    Route::delete('produk/gambar/{id}', [ProdukController::class, 'deleteImage'])->name('produk.delete-image');
    Route::resource('produk', ProdukController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('testimoni', \App\Http\Controllers\TestimoniController::class);
    Route::get('activity-logs', [\App\Http\Controllers\Admin\ActivityLogController::class, 'index'])->name('activity-logs.index');
});