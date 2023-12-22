<?php


use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BatunesiaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\everlastThingController;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AgrigardController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\DefloController;
use App\Http\Controllers\KonkuritoController;
use App\Http\Controllers\ShineageController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AgrigardController;

use App\Http\Controllers\BatunesiaController;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\verificationController;
use App\Http\Controllers\AdminAgrigardController;
use App\Http\Controllers\AdminShineageController;
use App\Http\Controllers\everlastThingController;
use App\Http\Controllers\AdminBatunesiaController;
use App\Http\Controllers\AdminKonkuritoController;
use App\Http\Controllers\AdminEverlasThingController;
use App\Http\Controllers\AdminDedikasiFloraController;

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


Route::get('/',[ArtikelController::class, 'index']);

Route::get('/portal-edukasi/{kategori}', [ArtikelController::class, 'byKategori'])->name('landing-artikel.kategori');
Route::get('/portal-edukasi', [ArtikelController::class, 'index'])->name('landing-artikel');
Route::get('/portal-edukasi/baca/{slug}', [ArtikelController::class, 'baca'])->name('baca-artikel');
Route::post('/portal-edukasi/rating/{slug}', [ArtikelController::class, 'rating'])->name('rating-artikel');
Route::post('/portal-edukasi/komentar/{slug}', [ArtikelController::class, 'komentar'])->name('komentar-artikel');

Route::get('/brand', [BrandController::class, 'index'])->name('Brand-Batunesia');
Route::get('/detail', [DetailController::class, 'index'])->name('Detail-Batunesia');
Route::get('/detail-batunesia/{id_batu}', [DetailController::class, 'showDetail'])->name('Detail-Batunesia');

Auth::routes();
Route::get('/home/show/{kategori}', [ArtikelController::class, 'show'])->name('home.show');
Route::get('/portal-edukasi/komentar/{kategori}', [ArtikelController::class, 'sKomentar'])->name('komentar.show');


//Admin Agrigard
Route::get('/daftar-produk', [AdminAgrigardController::class, 'index'])->name('daftar-produk');
Route::get('/daftar-produk/{id}', [AdminAgrigardController::class, 'view'])->name('daftar-produk.view');

Route::get('/tambah-produk', [AdminAgrigardController::class, 'create'])->name('daftar-produk.tambah');
Route::post('/tambah-produk/store', [AdminAgrigardController::class, 'store'])->name('daftar-produk.save');

Route::get('/edit-produk/{id}', [AdminAgrigardController::class, 'edit'])->name('daftar-produk.edit');
Route::put('/edit-produk/{id}', [AdminAgrigardController::class, 'update'])->name('daftar-produk.update');
Route::post('/post-produk', [AdminAgrigardController::class, 'post'])->name('daftar-produk.status');

Route::get('/delete-produk/{id}', [AdminAgrigardController::class, 'delete'])->name('daftar-produk.delete');
Route::delete('/destroy-produk/{id}', [AdminAgrigardController::class, 'destroy'])->name('daftar-produk.destroy');

//Admin Shineage
Route::get('/daftar-shineage', [AdminShineageController::class, 'index'])->name('shineages');
Route::get('/daftar-shineage/{id}', [AdminShineageController::class, 'view'])->name('shineages.view');

Route::get('/tambah-shineage', [AdminShineageController::class, 'create'])->name('shineages.tambah');
Route::post('/tambah-shineage/store', [AdminShineageController::class, 'store'])->name('shineages.save');

Route::get('/edit-shineage/{id}', [AdminShineageController::class, 'edit'])->name('shineages.edit');
Route::put('/edit-shineage/{id}', [AdminShineageController::class, 'update'])->name('shineages.update');
Route::post('/post-shineage', [AdminShineageController::class, 'post'])->name('shineages.status');

Route::get('/delete-shineage/{id}', [AdminShineageController::class, 'delete'])->name('shineages.delete');
Route::delete('/destroy-shineage/{id}', [AdminShineageController::class, 'destroy'])->name('shineages.destroy');

//Admin Konkurito
Route::get('/daftar-konkurito', [AdminKonkuritoController::class, 'index'])->name('konkuritos');
Route::get('/daftar-konkurito/{id}', [AdminKonkuritoController::class, 'view'])->name('konkuritos.view');

Route::get('/tambah-konkurito', [AdminKonkuritoController::class, 'create'])->name('konkuritos.tambah');
Route::post('/tambah-konkurito/store', [AdminKonkuritoController::class, 'store'])->name('konkuritos.save');

Route::get('/edit-konkurito/{id}', [AdminKonkuritoController::class, 'edit'])->name('konkuritos.edit');
Route::put('/edit-konkurito/{id}', [AdminKonkuritoController::class, 'update'])->name('konkuritos.update');
Route::post('/post-konkurito', [AdminKonkuritoController::class, 'post'])->name('konkuritos.status');

Route::get('/delete-konkurito/{id}', [AdminKonkuritoController::class, 'delete'])->name('konkuritos.delete');
Route::delete('/destroy-konkurito/{id}', [AdminKonkuritoController::class, 'destroy'])->name('konkuritos.destroy');

//Admin dedikasiFlora
Route::get('/daftar-dedikasiFlora', [AdminDedikasiFloraController::class, 'index'])->name('dedikasiFloras');
Route::get('/daftar-dedikasiFlora/{id}', [AdmindedikasiFloraController::class, 'view'])->name('dedikasiFloras.view');

Route::get('/tambah-dedikasiFlora', [AdmindedikasiFloraController::class, 'create'])->name('dedikasiFloras.tambah');
Route::post('/tambah-dedikasiFlora/store', [AdmindedikasiFloraController::class, 'store'])->name('dedikasiFloras.save');

Route::get('/edit-dedikasiFlora/{id}', [AdmindedikasiFloraController::class, 'edit'])->name('dedikasiFloras.edit');
Route::put('/edit-dedikasiFlora/{id}', [AdmindedikasiFloraController::class, 'update'])->name('dedikasiFloras.update');
Route::post('/post-dedikasiFlora', [AdmindedikasiFloraController::class, 'post'])->name('dedikasiFloras.status');

Route::get('/delete-dedikasiFlora/{id}', [AdmindedikasiFloraController::class, 'delete'])->name('dedikasiFloras.delete');
Route::delete('/destroy-dedikasiFlora/{id}', [AdmindedikasiFloraController::class, 'destroy'])->name('dedikasiFloras.destroy');

//Admin Batunesia
Route::get('/daftar-batunesia', [AdminBatunesiaController::class, 'index'])->name('batunesias');
Route::get('/daftar-batunesia/{id}', [AdminBatunesiaController::class, 'view'])->name('batunesias.view');

Route::get('/tambah-batunesia', [AdminBatunesiaController::class, 'create'])->name('batunesias.tambah');
Route::post('/tambah-batunesia/store', [AdminBatunesiaController::class, 'store'])->name('batunesias.save');

Route::get('/edit-batunesia/{id}', [AdminBatunesiaController::class, 'edit'])->name('batunesias.edit');
Route::put('/edit-batunesia/{id}', [AdminBatunesiaController::class, 'update'])->name('batunesias.update');
Route::post('/post-batunesia', [AdminBatunesiaController::class, 'post'])->name('batunesias.status');

Route::get('/delete-batunesia/{id}', [AdminBatunesiaController::class, 'delete'])->name('batunesias.delete');
Route::delete('/destroy-batunesia/{id}', [AdminBatunesiaController::class, 'destroy'])->name('batunesias.destroy');

//Admin everlasThing
Route::get('/daftar-everlasThing', [AdminEverlasThingController::class, 'index'])->name('everlasThings');
Route::get('/daftar-everlasThing/{id}', [AdminEverlasThingController::class, 'view'])->name('everlasThings.view');

Route::get('/tambah-everlasThing', [AdminEverlasThingController::class, 'create'])->name('everlasThings.tambah');
Route::post('/tambah-everlasThing/store', [AdminEverlasThingController::class, 'store'])->name('everlasThings.save');

Route::get('/edit-everlasThing/{id}', [AdminEverlasThingController::class, 'edit'])->name('everlasThings.edit');
Route::put('/edit-everlasThing/{id}', [AdminEverlasThingController::class, 'update'])->name('everlasThings.update');
Route::post('/post-everlasThing', [AdminEverlasThingController::class, 'post'])->name('everlasThings.status');

Route::get('/delete-everlasThing/{id}', [AdminEverlasThingController::class, 'delete'])->name('everlasThings.delete');
Route::delete('/destroy-everlasThing/{id}', [AdminEverlasThingController::class, 'destroy'])->name('everlasThings.destroy');

Route::get('agrigard/index',[AgrigardController::class,'indexBrand'])->name('agrigard.utama');
Route::get('agrigard/showcase',[AgrigardController::class,'showcase'])->name('agrigard.showcase');
Route::get('agrigard/show/{id_agrigard}',[AgrigardController::class,'details'])->name('agrigard.detail');

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

//batunesia
Route::get('/batunesia/index', [BatunesiaController::class, 'index'])->name('batunesia.index');
Route::get('/batunesia/index/showByWhite', [BatunesiaController::class, 'filterByWhite'])->name('batunesia.filterByWhite');
Route::get('/batunesia/index/showByBlack', [BatunesiaController::class, 'filterByBlack'])->name('batunesia.filterByBlack');
Route::get('/batunesia/index/showByCream', [BatunesiaController::class, 'filterByCream'])->name('batunesia.filterByCream');
Route::get('/batunesia/index/showByGrey', [BatunesiaController::class, 'filterByGrey'])->name('batunesia.filterByGrey');
Route::get('/batunesia/index/showByBrown', [BatunesiaController::class, 'filterByBrown'])->name('batunesia.filterByBrown');
Route::get('/batunesia/index/showByPancawarna', [BatunesiaController::class, 'filterByPancawarna'])->name('batunesia.filterByPancawarna');
Route::get('/batunesia/index/showByBatuHampar', [BatunesiaController::class, 'filterByBatuHampar'])->name('batunesia.filterByBatuHampar');
Route::get('/batunesia/index/showByBatuTempel', [BatunesiaController::class, 'filterByBatuTempel'])->name('batunesia.filterByBatuTempel');
Route::get('/batunesia/index/showByBatuHias', [BatunesiaController::class, 'filterByBatuHias'])->name('batunesia.filterByBatuHias');
Route::get('/batunesia/index/showByOrnamenBatu', [BatunesiaController::class, 'filterByOrnamenBatu'])->name('batunesia.filterByOrnamenBatu');
Route::get('/batunesia/index/showByPotBatu', [BatunesiaController::class, 'filterByPotBatu'])->name('batunesia.filterByPotBatu');

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


//everlasthing
Route::get('/everlasthings/brand', [everlastThingController::class, 'index'])->name('everlasthings.brand');
Route::get('/everlasthings/detailProduct', [everlastThingController::class, 'detailProduct'])->name('everlasthings.detailProduct');
Route::get('/everlasthings/showcase', [everlastThingController::class, 'showcase'])->name('everlasthings.showcase');


//batunesia
Route::get('/batunesia/index', [BatunesiaController::class, 'index'])->name('batunesia.index');
Route::get('/batunesia/index/showByWhite', [BatunesiaController::class, 'filterByWhite'])->name('batunesia.filterByWhite');
Route::get('/batunesia/index/showByBlack', [BatunesiaController::class, 'filterByBlack'])->name('batunesia.filterByBlack');
Route::get('/batunesia/index/showByCream', [BatunesiaController::class, 'filterByCream'])->name('batunesia.filterByCream');
Route::get('/batunesia/index/showByGrey', [BatunesiaController::class, 'filterByGrey'])->name('batunesia.filterByGrey');
Route::get('/batunesia/index/showByBrown', [BatunesiaController::class, 'filterByBrown'])->name('batunesia.filterByBrown');
Route::get('/batunesia/index/showByPancawarna', [BatunesiaController::class, 'filterByPancawarna'])->name('batunesia.filterByPancawarna');
Route::get('/batunesia/index/showByBatuHampar', [BatunesiaController::class, 'filterByBatuHampar'])->name('batunesia.filterByBatuHampar');
Route::get('/batunesia/index/showByBatuTempel', [BatunesiaController::class, 'filterByBatuTempel'])->name('batunesia.filterByBatuTempel');
Route::get('/batunesia/index/showByBatuHias', [BatunesiaController::class, 'filterByBatuHias'])->name('batunesia.filterByBatuHias');
Route::get('/batunesia/index/showByOrnamenBatu', [BatunesiaController::class, 'filterByOrnamenBatu'])->name('batunesia.filterByOrnamenBatu');
Route::get('/batunesia/index/showByPotBatu', [BatunesiaController::class, 'filterByPotBatu'])->name('batunesia.filterByPotBatu');

//transaksi
Route::get('/keranjang', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/tambahKeKeranjang/{id_batu}', [TransaksiController::class, 'tambahKeKeranjang'])->name('tambahKeKeranjang');
Route::delete('/hapus-dari-keranjang/{id_batu}', [TransaksiController::class, 'remove'])->name('hapusDariKeranjang');
//route verifikasi
Route::get('/email/verify/need-verification', [verificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [verificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');

//deflo

Route::get('deflo',[DefloController::class,'index'])->name('deflo.utama');
Route::get('deflo/showcase',[DefloController::class,'showcase'])->name('deflo.showcase');
Route::get('deflo/showcase/kategori',[DefloController::class,'showcase2'])->name('deflo.kategori');
Route::get('deflo/show/{id_nurseri}',[DefloController::class,'show'])->name('deflo.detail');

//Konkurito
Route::get('konkurito/index',[KonkuritoController::class,'index'])->name('konkurito.utama');
Route::get('konkurito/showcase',[KonkuritoController::class,'showcase'])->name('konkurito.showcase');
Route::get('konkurito/show/{id_konkurito}',[KonkuritoController::class,'show'])->name('konkurito.detail');

//Shineage
Route::get('shineage/index',[ShineageController::class,'indexBrand'])->name('shineage.utama');
Route::get('shineage/showcase',[ShineageController::class,'showcase'])->name('shineage.showcase');
Route::get('shineage/show/{id_shineage}',[ShineageController::class,'show'])->name('shineage.detail');

