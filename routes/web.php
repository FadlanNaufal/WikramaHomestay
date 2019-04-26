<?php

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
    return redirect()->route('login');
});



Route::get('/login/user','UserAuth\LoginController@loginShow')->name('user.show');
Route::post('/login/user','UserAuth\LoginController@loginForm')->name('loginPelanggan');



Route::group(['prefix'=>'admin'],function(){
	Route::get('/','HotelController@index');
	Route::get('/fitur','FiturController@index');
	Route::get('/berita','BeritaController@index');
	Route::get('/data','HotelController@data');
	Route::get('/tamu','HotelController@tamu');
	Route::get('/masuk','HotelController@pemasukan');
	Route::get('/tampil','HotelController@tampilUser');
	Route::get('/hapusUser/{id}','HotelController@hapusUser');
	Route::get('/email', function () {
    return view('admin.email.send-email');
	});

	Route::post('/sendemail', 'EmailController@sendEmail');
});

Route::group(['prefix'=>'laporan'],function(){
	Route::get('/tampil','LaporanController@index');
	Route::post('/tampil','LaporanController@index');
});


Route::group(['prefix'=>'user'],function(){
	Route::get('/','UserController@index')->name('user.dashboard');
	Route::get('/komentar','UserController@komentar');
	Route::get('/lihatkamar','UserController@lihatkamar')->name('kamarUser');
	Route::post('/komentar/save','UserController@save');
});

Route::group(['prefix'=>'pelanggan'],function(){
	Route::get('/','PelangganController@index');
	Route::get('/komentar','UserController@komentar');
	Route::get('/lihatkamar','UserController@lihatkamar')->name('kamarUser');
	Route::post('/komentar/save','UserController@save');
});


Route::group(['prefix'=>'kamar'],function(){
	Route::get('/','kamarVVIPController@index');
	Route::get('/',function(){
	$fitur = App\Fitur::pluck('nama_fitur','id')->toArray();
	return view('admin.kamar.index',compact('fitur'));
});
	Route::post('/save','kamarVVIPController@save');
	Route::get('/vvip/data','kamarVVIPController@tampilvvip');
	Route::get('/vvip/print1','kamarVVIPController@printvvip');
	Route::get('/vip/print2','kamarVVIPController@printvip');
	Route::get('/vvip/print3','kamarVVIPController@printReg');
	Route::get('/vip/data','kamarVVIPController@tampilvip');
	Route::get('/regular/data','kamarVVIPController@tampilreg');
	Route::get('/hapusVvip/{id}','kamarVVIPController@hapusVvip');
	Route::get('/hapusVip/{id}','kamarVVIPController@hapusVip');
	Route::get('/hapusReg/{id}','kamarVVIPController@hapusReg');
	Route::get('/editReg/{id}','kamarVVIPController@editReg');
	Route::get('/editVvip/{id}','kamarVVIPController@editVvip');
	Route::post('regular/update/{id}','kamarVVIPController@update');
	Route::post('VVIP/update/{id}','kamarVVIPController@update');
	Route::get('/detailvvip/{id}','kamarVVIPController@detailVvip');
});

Route::group(['prefix'=>'fitur'],function(){
	Route::get('/tambah','FiturController@tambah');
	Route::post('/save','FiturController@save');
	Route::get('/hapus/{id}','FiturController@hapus');
});

Route::group(['prefix'=>'transaksi'],function(){
	Route::get('/','TransaksiController@index')->name('transaksi');
	Route::post('/notification/handler','TransaksiController@notifHandler');
	Route::get('/tampil','TransaksiController@tampil');
	Route::get('/update/{id}','TransaksiController@update');
	Route::post('/finish', function(){
	    return redirect()->route('/user');
	})->name('donation.finish');
	Route::get('/hapus/{id}','TransaksiController@hapus');
});

Route::group(['prefix'=>'berita'],function(){
	Route::get('/','BeritaController@tambah');
	Route::post('/save','BeritaController@save');
	Route::get('/hapus/{id}','BeritaController@hapus');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

