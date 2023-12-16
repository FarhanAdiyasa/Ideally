<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AgrigardController;
use App\Http\Controllers\AdminAgrigardController;
use App\Http\Controllers\AdminArtikelController;

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

Route::get('/',function () {
    return view('index');
});
Route::get('/portal-edukasi/{kategori}', [ArtikelController::class, 'byKategori'])->name('landing-artikel.kategori');
Route::get('/portal-edukasi', [ArtikelController::class, 'index'])->name('landing-artikel');
Route::get('/portal-edukasi/baca/{slug}', [ArtikelController::class, 'baca'])->name('baca-artikel');
Route::post('/portal-edukasi/rating/{slug}', [ArtikelController::class, 'rating'])->name('rating-artikel');
Route::post('/portal-edukasi/komentar/{slug}', [ArtikelController::class, 'komentar'])->name('komentar-artikel');

Auth::routes();
Route::get('/home/show/{kategori}', [ArtikelController::class, 'show'])->name('home.show');
Route::get('/portal-edukasi/komentar/{kategori}', [ArtikelController::class, 'sKomentar'])->name('komentar.show');


//Agrigard
Route::get('/daftar-produk', [AdminAgrigardController::class, 'index'])->name('daftar-produk');
Route::get('/daftar-produk/{id}', [AdminAgrigardController::class, 'view'])->name('daftar-produk.view');

Route::get('/tambah-produk', [AdminAgrigardController::class, 'create'])->name('daftar-produk.tambah');
Route::post('/tambah-produk/store', [AdminAgrigardController::class, 'store'])->name('daftar-produk.save');

Route::get('/edit-produk/{id}', [AdminAgrigardController::class, 'edit'])->name('daftar-produk.edit');
Route::put('/edit-produk/{id}', [AdminAgrigardController::class, 'update'])->name('daftar-produk.update');
Route::post('/post-produk', [AdminAgrigardController::class, 'post'])->name('daftar-produk.status');

Route::get('/delete-produk/{id}', [AdminAgrigardController::class, 'delete'])->name('daftar-produk.delete');
Route::delete('/destroy-produk/{id}', [AdminAgrigardController::class, 'destroy'])->name('daftar-produk.destroy');


//Promo
Route::get('/daftar-promo', [PromoController::class, 'index'])->name('daftar-promo');

Route::get('/tambah-promo', [PromoController::class, 'create'])->name('daftar-promo.tambah');
Route::post('/tambah-promoc', [PromoController::class, 'store'])->name('daftar-promo.save');
Route::get('/tambah-promo/{brand}', [PromoController::class, 'show'])->name('promo-show.product');

Route::get('/edit-promo/{id}/{brand}', [PromoController::class, 'showEdit'])->name('promo-show-edit.product');
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('daftar-promo.edit');
Route::put('/edit-promo/{id}', [PromoController::class, 'update'])->name('daftar-promo.update');
Route::post('/post-promo', [PromoController::class, 'post'])->name('daftar-promo.status');

Route::get('/delete-promo/{id}', [PromoController::class, 'delete'])->name('daftar-promo.delete');
Route::delete('/destroy-promo/{id}', [PromoController::class, 'destroy'])->name('daftar-promo.destroy');


//Artikel
Route::get('/daftar-artikel', [AdminArtikelController::class, 'index'])->name('artikels');
Route::get('/tambah-artikel', [AdminArtikelController::class, 'create'])->name('artikels.create');
Route::post('/tambah-artikel/store', [AdminArtikelController::class, 'store'])->name('artikels.save');
Route::get('/daftar-artikel/preview/{slug}', [AdminArtikelController::class, 'preview'])->name('artikels.preview');

Route::get('/edit-artikel/{id}', [AdminArtikelController::class, 'edit'])->name('artikels.edit');
Route::put('/edit-artikel/{id}', [AdminArtikelController::class, 'update'])->name('artikels.update');
Route::get('/delete-artikel/{id}', [AdminArtikelController::class, 'delete'])->name('artikels.delete');
Route::delete('/destroy-artikel/{id}', [AdminArtikelController::class, 'destroy'])->name('artikels.destroy');
Route::post('/post-artikel', [AdminArtikelController::class, 'post'])->name('artikels.post');
