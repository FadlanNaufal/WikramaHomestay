<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('transaksi/save','TransaksiController@submitDonation');

Route::get('ajax/kamar/{kelas}','KamarVVIPController@ajax_kelas');
Route::get('ajax/kamar_detail/{id}','KamarVVIPController@ajax_kamar_detail');
Route::post('user/login','UserController@login');

Route::get('/cek_kamar','KamarVVIPController@list');

Route::get('/cek_kamar_selesai','TransaksiController@KamarSelesaiApi');

Route::get('/cek_berita','BeritaController@list');

Route::get('/cek_fitur','FiturController@listFitur');

Route::get('/cek_kamar_detail/{id}','KamarVVIPController@listDetail');

