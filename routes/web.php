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
    return view('welcome');
});

Route::get('pertemuan-1', function () {
    return view('pertemuan-1');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showJam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@viewPegawai');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/tambah','App\Http\Controllers\KeranjangController@tambah');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/sepedamotor','App\Http\Controllers\SepedamotorController@index');
Route::get('/sepedamotor/tambah','App\Http\Controllers\SepedamotorController@tambah');
Route::post('/sepedamotor/store','App\Http\Controllers\SepedamotorController@store');
Route::get('/sepedamotor/edit/{id}','App\Http\Controllers\SepedamotorController@edit');
Route::post('/sepedamotor/update','App\Http\Controllers\SepedamotorController@update');
Route::get('/sepedamotor/hapus/{id}','App\Http\Controllers\SepedamotorController@hapus');
Route::get('/sepedamotor/cari','App\Http\Controllers\SepedamotorController@cari');
Route::get('/sepedamotor/lihat/{id}','App\Http\Controllers\SepedamotorController@viewSepedamotor');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');