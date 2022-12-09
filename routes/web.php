<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operator;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});

//Route::get('login', [LoginController::class, 'index'])->name('login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekUserLogin:1']], function () {
        Route::resource('kategori', KategoriController::class);
        Route::resource('jenis', JenisController::class);
        Route::resource('artikel', ArtikelController::class);
        Route::resource('profil', ProfilController::class);
    });

    Route::group(['middleware' => ['CekUserLogin:2']], function () {
        Route::resource('artikel', ArtikelController::class);
        Route::resource('profil', ProfilController::class);
    });
});
