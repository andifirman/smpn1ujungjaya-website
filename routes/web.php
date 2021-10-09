<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', function () {
    return view('beranda');
});

// Menampilkan data siswa
Route::get('/siswa', 'SiswaController@index');

// Menambah data siswa
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/store', 'SiswaController@store');

// Untuk mengedit data siswa
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::post('/siswa/update', 'SiswaController@update');

// Menghapus data siswa
Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');

// -------------------------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -------------------------------------------------------
// Route untuk navbar 
Route::get('beranda', [FrontController::class, 'beranda'])->name('beranda');
Route::get('struktur-organisasi', [FrontController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
Route::get('fasilitas', [FrontController::class, 'fasilitas'])->name('fasilitas');
Route::get('ekstrakurikuler', [FrontController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('masuk', [FrontController::class, 'masuk'])->name('masuk');

// Route untuk artikel 
// Menambah artikel
Route::get('/add', function () {
  return view('add');
});
Route::get('/', 'ArtikelController@show'); // Nanti ubah, redirect ke halaman admin
Route::post('/add_process', 'ArtikelController@add_process');

// Routing untuk menampilkan detail artikel
Route::get('/detail/{id}', 'ArtikelController@detail');



