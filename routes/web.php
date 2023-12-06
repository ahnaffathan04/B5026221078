<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function () {
    return "<h1>Haloo apa kabar? </h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('my_portofolio', function () {
	return view('fathanets');
});

Route::get('kkado', function () {
	return view('fathankkado');
});

Route::get('figma', function () {
	return view('fathanbootstrap');
});

Route::get('validation_form', function () {
	return view('fathanvalidation');
});

Route::get('responsive', function () {
	return view('fathanresponsive');
});

Route::get('js1', function () {
	return view('fathanjs1');
});

Route::get('js2', function () {
	return view('fathanjs2');
});

Route::get('link', function () {
	return view('fathanlink');
});

Route::get('hello', function () {
	return view('fathanhello');
});

Route::get('style', function () {
	return view('fathanstyle');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

//route cari
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route view
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


//route tugas pensil
Route::get('/pensil','App\Http\Controllers\PensilController@index2');
Route::get('/pensil/tambahpensil','App\Http\Controllers\PensilController@tambahpensil');
Route::post('/pensil/store','App\Http\Controllers\PensilController@store');
Route::get('/pensil/editpensil/{kode}','App\Http\Controllers\PensilController@edit');
Route::post('/pensil/update','App\Http\Controllers\PensilController@update');
Route::get('/pensil/hapus/{kode}','App\Http\Controllers\PensilController@hapus');
Route::get('/pensil/cari','App\Http\Controllers\PensilController@cari');
Route::get('/pensil/viewpensil/{kode}','App\Http\Controllers\PensilController@view');

//route tugas nilai(LK)
Route::get('/nilai','App\Http\Controllers\NilaiController@index3');
Route::get('/nilai/tambahdata','App\Http\Controllers\NilaiController@tambahdata');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

//route tugas keranjang(PR)
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexkeranjangbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');
