<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/portal-edukasi/{kategori}', [ArtikelController::class, 'byKategori'])->name('landing-artikel.kategori');
Route::get('/portal-edukasi', [ArtikelController::class, 'index'])->name('landing-artikel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/show/{kategori}', [App\Http\Controllers\ArtikelController::class, 'show'])->name('home.show');

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
