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
