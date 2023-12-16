<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AgrigardController;
use App\Http\Controllers\AdminAgrigardController;
use App\Http\Controllers\AdminArtikelController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\everlastThingController;
use App\Http\Controllers\verificationController;

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
Route::post('/tambah-promo', [PromoController::class, 'store'])->name('daftar-promo.save');
Route::get('/tambah-promo/{brand}', [PromoController::class, 'show'])->name('promo-show.product');

Route::get('/edit-promo/{id}/{brand}', [PromoController::class, 'showEdit'])->name('promo-show-edit.product');
Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('daftar-promo.edit');
Route::put('/edit-promo/{id}', [PromoController::class, 'update'])->name('daftar-promo.update');
Route::post('/post-promo', [PromoController::class, 'post'])->name('daftar-promo.status');

Route::get('/delete-promo/{id}', [PromoController::class, 'delete'])->name('daftar-promo.delete');
Route::delete('/destroy-promo/{id}', [PromoController::class, 'destroy'])->name('daftar-promo.destroy');

//batunesia
Route::get('/batunesia/index', [App\Http\Controllers\BatunesiaController::class, 'index'])->name('batunesia.index');
Route::get('/batunesia/index/showByWhite', [App\Http\Controllers\BatunesiaController::class, 'filterByWhite'])->name('batunesia.filterByWhite');
Route::get('/batunesia/index/showByBlack', [App\Http\Controllers\BatunesiaController::class, 'filterByBlack'])->name('batunesia.filterByBlack');
Route::get('/batunesia/index/showByCream', [App\Http\Controllers\BatunesiaController::class, 'filterByCream'])->name('batunesia.filterByCream');
Route::get('/batunesia/index/showByGrey', [App\Http\Controllers\BatunesiaController::class, 'filterByGrey'])->name('batunesia.filterByGrey');
Route::get('/batunesia/index/showByBrown', [App\Http\Controllers\BatunesiaController::class, 'filterByBrown'])->name('batunesia.filterByBrown');
Route::get('/batunesia/index/showByPancawarna', [App\Http\Controllers\BatunesiaController::class, 'filterByPancawarna'])->name('batunesia.filterByPancawarna');
Route::get('/batunesia/index/showByBatuHampar', [App\Http\Controllers\BatunesiaController::class, 'filterByBatuHampar'])->name('batunesia.filterByBatuHampar');
Route::get('/batunesia/index/showByBatuTempel', [App\Http\Controllers\BatunesiaController::class, 'filterByBatuTempel'])->name('batunesia.filterByBatuTempel');
Route::get('/batunesia/index/showByBatuHias', [App\Http\Controllers\BatunesiaController::class, 'filterByBatuHias'])->name('batunesia.filterByBatuHias');
Route::get('/batunesia/index/showByOrnamenBatu', [App\Http\Controllers\BatunesiaController::class, 'filterByOrnamenBatu'])->name('batunesia.filterByOrnamenBatu');
Route::get('/batunesia/index/showByPotBatu', [App\Http\Controllers\BatunesiaController::class, 'filterByPotBatu'])->name('batunesia.filterByPotBatu');

//everlasthing
Route::get('/everlasthings/detailProduct', [everlastThingController::class, 'detailProduct'])->name('everlasthings.detailProduct');

//authentikasi login & regis
Route::get('/auth/redirect',[AuthController::class, "redirect"])->middleware('guest');
Route::get('/auth',[AuthController::class, "index"])->name('login')->middleware('guest');
Route::get('/auth/callback',[AuthController::class, "callback"])->middleware('guest');
Route::get('/auth/logout',[AuthController::class,"logout"]);
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/create',[AuthController::class,"create"]);
Route::post('/auth/login',[AuthController::class,"login"]);
Route::get('/auth/dashboard/{id}', [AuthController::class, "dashboard"])->middleware('auth');

//route lupa password
Route::get('forget-password', [AuthController::class, "forgetPassword"])->name('forget.password');
Route::post('forget-password', [AuthController::class, "forgetPasswordPost"])->name('forget.password.post');
Route::get('reset-password/{token}', [AuthController::class, "resetPassword"])->name("reset.password");
Route::post('reset-password', [AuthController::class, "resetPasswordPost"])->name("reset.password.post");


//route verifikasi
Route::get('/email/verify/need-verification', [verificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [verificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');
