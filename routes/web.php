<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Operator;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
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
        Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
        Route::get('/kategori/tambah', [KategoriController::class, 'add']);
        Route::post('/kategori/insert', [KategoriController::class, 'insert']);
        Route::get('/kategori/edit/{id_kategori}', [KategoriController::class, 'edit']);
        Route::post('/kategori/update/{id_kategori}', [KategoriController::class, 'update']);
        Route::get('/kategori/delete/{id_kategori}', [KategoriController::class, 'delete']);

        Route::get('jenis', [JenisController::class, 'index'])->name('jenis');
        Route::get('/jenis/tambah', [JenisController::class, 'add']);
        Route::post('/jenis/insert', [JenisController::class, 'insert']);
        Route::get('/jenis/edit/{id_jenis}', [JenisController::class, 'edit']);
        Route::post('/jenis/update/{id_jenis}', [JenisController::class, 'update']);
        Route::get('/jenis/delete/{id_jenis}', [JenisController::class, 'delete']);

        Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
        Route::get('/artikel/tambah', [ArtikelController::class, 'add']);
        Route::post('/artikel/insert', [ArtikelController::class, 'insert']);
        Route::get('/artikel/edit/{id_artikel}', [ArtikelController::class, 'edit']);
        Route::post('/artikel/update/{id_artikel}', [ArtikelController::class, 'update']);
        Route::get('/artikel/detail/{id_artikel}', [ArtikelController::class, 'detail']);
        Route::get('/artikel/delete/{id_artikel}', [ArtikelController::class, 'delete']);


        Route::resource('profil', ProfilController::class);
        Route::resource('user', UserController::class);
    });

    //Route::group(['middleware' => ['CekUserLogin:2']], function () {
    //    Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel');
    //    Route::get('/artikel/tambah', [ArtikelController::class, 'add']);
    //    Route::post('/artikel/insert', [ArtikelController::class, 'insert']);
    //    Route::get('/artikel/detail/{id_artikel}', [ArtikelController::class, 'detail']);
    //    Route::get('/artikel/delete/{id_artikel}', [ArtikelController::class, 'delete']);

        
    //    Route::resource('profil', ProfilController::class);
    //});
});
