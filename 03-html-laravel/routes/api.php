<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\PenggunaApiController;
use App\Http\Controllers\API\TransaksiApiController;
use App\Http\Controllers\API\InventarisApiController;
use App\Http\Controllers\API\ForumApiController;
use App\Http\Controllers\API\AktivitasApiController;
use App\Http\Controllers\Resources\Pengguna;
use App\Http\Controllers\Resources\Transaksi;
use App\Http\Controllers\Resources\Inventaris;
use App\Http\Controllers\Resources\Activity;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//with auth passport
Route::post('registration', [AuthApiController::class, 'register']);
Route::post('login', [AuthApiController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {
    Route::resource('pengguna', PenggunaApiController::class);
    Route::resource('transaksi', TransaksiApiController::class);
    Route::resource('inventaris', InventarisApiController::class);
    Route::resource('activity', AktivitasApiController::class);
    Route::resource('forum', ForumApiController::class);
    Route::post('logout', [AuthApiController::class, 'logout']);
});