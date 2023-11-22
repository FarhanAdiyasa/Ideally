<?php

use App\Http\Controllers\ArtikelController;
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

Route::get('/', [ArtikelController::class, 'index'])->name('daftar-artikel');
Route::post('/portal-edukasi/daftar-artikel/sort', [ArtikelController::class, 'index'])->name('daftar-artikel.sort');
Route::post('/portal-edukasi/daftar-artikel/search', [ArtikelController::class, 'index'])->name('daftar-artikel.search');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');