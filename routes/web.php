<?php

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

Route::get('/', function () {
    return redirect('karyawan');
});
Route::get('anggota', 'App\Http\Controllers\AnggotaController@index');
Route::get('anggota/tambah', 'App\Http\Controllers\AnggotaController@tambah');
Route::post('anggota/tambah_proses', 'App\Http\Controllers\AnggotaController@tambah_proses');
Route::get('anggota/edit/{id}', 'App\Http\Controllers\AnggotaController@edit');
Route::post('anggota/edit_proses', 'App\Http\Controllers\AnggotaController@edit_proses');
Route::get('anggota/delete/{id}', 'App\Http\Controllers\AnggotaController@delete');
Route::get('katalog', 'App\Http\Controllers\KatalogController@index');
Route::get('katalog/tambah', 'App\Http\Controllers\KatalogController@tambah');
Route::post('katalog/tambah_proses', 'App\Http\Controllers\KatalogController@tambah_proses');
Route::get('katalog/edit/{id}', 'App\Http\Controllers\KatalogController@edit');
Route::post('katalog/edit_proses', 'App\Http\Controllers\KatalogController@edit_proses');
Route::get('katalog/delete/{id}', 'App\Http\Controllers\KatalogController@delete');
Route::get('karyawan', 'App\Http\Controllers\karyawanController@index');
Route::get('karyawan/tambah', 'App\Http\Controllers\karyawanController@tambah');
Route::post('karyawan/tambah_proses', 'App\Http\Controllers\karyawanController@tambah_proses');
Route::get('karyawan/edit/{id}', 'App\Http\Controllers\karyawanController@edit');
Route::post('karyawan/edit_proses', 'App\Http\Controllers\karyawanController@edit_proses');
Route::get('karyawan/delete/{id}', 'App\Http\Controllers\karyawanController@delete');
Route::get('pengunjung', 'App\Http\Controllers\PengunjungController@index');
Route::get('pengunjung/tambah', 'App\Http\Controllers\PengunjungController@tambah');
Route::post('pengunjung/tambah_proses', 'App\Http\Controllers\PengunjungController@tambah_proses');
Route::get('pengunjung/edit/{id}', 'App\Http\Controllers\PengunjungController@edit');
Route::post('pengunjung/edit_proses', 'App\Http\Controllers\pengunjungController@edit_proses');
Route::get('pengunjung/delete/{id}', 'App\Http\Controllers\pengunjungController@delete');
