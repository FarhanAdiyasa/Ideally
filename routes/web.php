<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AgrigardController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DefloController;
use App\Http\Controllers\KonkuritoController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
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
Route::get('/daftar-produk', [AgrigardController::class, 'index'])->name('daftar-produk');
Route::get('/daftar-produk/{id}', [AgrigardController::class, 'view'])->name('daftar-produk.view');

Route::get('/tambah-produk', [AgrigardController::class, 'create'])->name('daftar-produk.tambah');
Route::post('/tambah-produk/store', [AgrigardController::class, 'store'])->name('daftar-produk.save');

Route::get('/edit-produk/{id}', [AgrigardController::class, 'edit'])->name('daftar-produk.edit');
Route::put('/edit-produk/{id}', [AgrigardController::class, 'update'])->name('daftar-produk.update');
Route::post('/post-produk', [AgrigardController::class, 'post'])->name('daftar-produk.status');

Route::get('/delete-produk/{id}', [AgrigardController::class, 'delete'])->name('daftar-produk.delete');
Route::delete('/destroy-produk/{id}', [AgrigardController::class, 'destroy'])->name('daftar-produk.destroy');

Route::get('agrigard/index',[AgrigardController::class,'indexBrand'])->name('agrigard.utama');
Route::get('agrigard/showcase',[AgrigardController::class,'showcase'])->name('agrigard.showcase');
Route::get('agrigard/show/{id_agrigard}',[AgrigardController::class,'details'])->name('agrigard.detail');

//Promo
Route::get('/daftar-promo', [PromoController::class, 'index'])->name('daftar-promo');

Route::get('/tambah-promo', [PromoController::class, 'create'])->name('daftar-promo.tambah');
Route::post('/tambah-promo/store', [PromoController::class, 'store'])->name('daftar-promo.save');
Route::get('/tambah-promo/{brand}', [PromoController::class, 'show'])->name('promo-show.product');

Route::get('/edit-promo/{id}/{brand}', [PromoController::class, 'showEdit'])->name('promo-show-edit.product');
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('daftar-promo.edit');
Route::put('/edit-promo/{id}', [PromoController::class, 'update'])->name('daftar-promo.update');
Route::post('/post-promo', [PromoController::class, 'post'])->name('daftar-promo.status');

Route::get('/delete-promo/{id}', [PromoController::class, 'delete'])->name('daftar-promo.delete');
Route::delete('/destroy-promo/{id}', [PromoController::class, 'destroy'])->name('daftar-promo.destroy');

//Dedikasi flora
Route::get('deflo',[DefloController::class,'index'])->name('deflo.utama');
Route::get('deflo/showcase',[DefloController::class,'showcase'])->name('deflo.showcase');
Route::get('deflo/showcase/kategori',[DefloController::class,'showcase2'])->name('deflo.kategori');
Route::get('deflo/show/{id_nurseri}',[DefloController::class,'show'])->name('deflo.detail');

//Konkurito
Route::get('konkurito/index',[KonkuritoController::class,'index'])->name('konkurito.utama');
Route::get('konkurito/showcase',[KonkuritoController::class,'showcase'])->name('konkurito.showcase');
Route::get('konkurito/show/{id_konkurito}',[KonkuritoController::class,'show'])->name('konkurito.detail');