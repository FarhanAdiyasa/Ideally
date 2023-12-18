<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BatunesiaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\everlastThingController;
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
    return view('home');
});

Route::get('/portal-edukasi/{kategori}', [ArtikelController::class, 'byKategori'])->name('landing-artikel.kategori');
Route::get('/portal-edukasi', [ArtikelController::class, 'index'])->name('landing-artikel');

Route::get('/brand', [BrandController::class, 'index'])->name('Brand-Batunesia');
Route::get('/detail', [DetailController::class, 'index'])->name('Detail-Batunesia');
Route::get('/detail-batunesia/{id_batu}', [DetailController::class, 'showDetail'])->name('Detail-Batunesia');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/show/{kategori}', [App\Http\Controllers\ArtikelController::class, 'show'])->name('home.show');

//everlasthing
Route::get('/everlasthings/brand', [everlastThingController::class, 'index'])->name('everlasthings.brand');
Route::get('/everlasthings/detailProduct', [everlastThingController::class, 'detailProduct'])->name('everlasthings.detailProduct');
Route::get('/everlasthings/showcase', [everlastThingController::class, 'showcase'])->name('everlasthings.showcase');


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

