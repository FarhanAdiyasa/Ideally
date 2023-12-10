<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AgrigardController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/show/{kategori}', [ArtikelController::class, 'show'])->name('home.show');

Route::get('/daftar-produk', [AgrigardController::class, 'index'])->name('daftar-produk');
Route::get('/tambah-produk', [AgrigardController::class, 'create'])->name('daftar-produk.tambah');
Route::post('/tambah-produk/store', [AgrigardController::class, 'store'])->name('daftar-produk.save');
Route::get('/edit-produk/{id}', [AgrigardController::class, 'edit'])->name('daftar-produk.edit');
Route::put('/edit-produk/{id}', [AgrigardController::class, 'update'])->name('daftar-produk.update');
Route::post('/post-produk', [AgrigardController::class, 'post'])->name('daftar-produk.status');

Route::get('/daftar-produk/{id}', [AgrigardController::class, 'view'])->name('daftar-produk.view');
Route::get('/delete-produk/{id}', [AgrigardController::class, 'delete'])->name('daftar-produk.delete');
Route::delete('/destroy-produk/{id}', [AgrigardController::class, 'destroy'])->name('daftar-produk.destroy');

