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

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('register', 'App\http\Controllers\AuthController@showFormRegister')->name('register');
Route::post('register', 'App\http\Controllers\AuthController@register');

Route::group(['middleware' => ['auth','checkRole:koordinator,laboran']],function(){
Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
Route::get('/inventaris','App\Http\Controllers\InventarisController@index');
Route::post('/inventaris/create','App\Http\Controllers\InventarisController@create');
Route::get('/inventaris/{id}/edit','App\Http\Controllers\InventarisController@edit');
Route::post('/inventaris/{id}/update','App\Http\Controllers\InventarisController@update');
Route::get('/inventaris/{id}/delete','App\Http\Controllers\InventarisController@delete');
Route::get('/inventaris/exportExcel','App\Http\Controllers\InventarisController@exportExcel');
Route::get('/inventaris/exportPdf','App\Http\Controllers\InventarisController@exportPdf');

Route::get('/transaksi','App\Http\Controllers\TransaksiController@index');
Route::post('/transaksi/create','App\Http\Controllers\TransaksiController@create');
Route::get('/transaksi/{id}/edit','App\Http\Controllers\TransaksiController@edit');
Route::post('/transaksi/{id}/update','App\Http\Controllers\TransaksiController@update');
Route::get('/transaksi/{id}/delete','App\Http\Controllers\TransaksiController@delete');
Route::get('/transaksi/exportExcel','App\Http\Controllers\TransaksiController@exportExcel');
Route::get('/transaksi/exportPdf','App\Http\Controllers\TransaksiController@exportPdf');

Route::get('/pengguna','App\Http\Controllers\PenggunaController@index');
Route::post('/pengguna/create','App\Http\Controllers\PenggunaController@create');
Route::get('/pengguna/{id}/edit','App\Http\Controllers\PenggunaController@edit');
Route::post('/pengguna/{id}/update','App\Http\Controllers\PenggunaController@update');
Route::get('/pengguna/{id}/delete','App\Http\Controllers\PenggunaController@delete');
Route::get('/pengguna/{id}/profile','App\Http\Controllers\PenggunaController@profile');

Route::get('/forum', 'App\Http\Controllers\ForumController@index')->name('index');
Route::post('/forum/adds','App\Http\Controllers\ForumController@create');
Route::get('/forum/{id}/edit','App\Http\Controllers\ForumController@edit');
Route::post('/forum/{id}/update','App\Http\Controllers\ForumController@update');
Route::get('/forum/{id}/delete','App\Http\Controllers\ForumController@delete');

});

Route::group(['middleware' => ['auth','checkRole:koordinator']],function(){
Route::get('/aktivitas', 'App\http\Controllers\AktivitasController@index');
Route::get('/aktivitas/exportExcel','App\Http\Controllers\AktivitasController@exportExcel');
Route::get('/aktivitas/exportPdf','App\Http\Controllers\AktivitasController@exportPdf');
Route::get('/aktivitas/{id}/delete','App\Http\Controllers\AktivitasController@delete');
});
