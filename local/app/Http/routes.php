<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::auth();

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'LoginController@postLogin');
$this->get('logout', 'Auth\AuthController@logout');
 
// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');
 
// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'RegistrationController@postRegister');

Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');

Route::get('/', 'TokoController@index');
Route::get('/product/{id}/show',['as' => 'product.show', 'uses' => 'TokoController@showItem']);
Route::get('product/cart/{id}/show', 'TokoController@tambahItem');
Route::post('product/cart', ['as' => 'product.save', 'uses' => 'TokoController@tambahItem']  );
Route::get('product/cart', 'TokoController@showCart');
Route::get('cart/delete/{id}' , 'TokoController@hapusItem');
Route::get('cart/checkout', 'TokoController@checkout');
Route::post('/cart/{formid}/save',['as' => 'customer.save','uses' => 'TokoController@saveCustomer']);



//Route::get('/home', 'HomeController@index');
Route::get('invoice/{formid}', 'TokoController@viewInvoice');
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function() {
	//route admin
	Route::resource('products', 'ProductsController');
	Route::get('report', 'ReportController@index');
	Route::get('listuser','Users@listUsers');
	Route::get('dashboard','Dashboard@index');
	Route::get('dashboard/markall','Dashboard@markAll');
	Route::resource('categori','CategoriController');
	Route::post('report/periode',['as' => 'report.show', 'uses' => 'ReportController@getPeriode']);
	
});

Route::get('akun','Akun@index');   
Route::get('akun/delete/{id}','Akun@delete');   
Route::get('akun/bukti/{invoice}','Akun@uploadBukti');
Route::post('akun/bukti',['as' => 'postUploadBukti', 'uses' =>'Akun@postBukti']);   
Route::post('akun/ubahStatus/',['as' => 'postUbahStatus', 'uses' =>'Akun@ubahStatus']);   
Route::get('tambah','Admin@tambah');

Route::get('pdf/{formid}', 'TokoController@downloadInvoice');
Route::get('pencarian', 'TokoController@search');
Route::get('kategori/{id}', 'TokoController@showKategori');

// Route::get('/tes','Tes@index');
Route::post('cekongkir',['as' => 'cekOngkir','uses' =>'TokoController@cekOngkir']);
Route::post('pilihongkir',['as' => 'pilihOngkir','uses' =>'TokoController@pilihOnkir']);
Route::get('pilihongkir',['as' => 'pilihOngkir','uses' =>'TokoController@pilihOnkir']);
Route::post('simpanOngkir',['as' => 'simpanOngkir','uses' =>'TokoController@simpanOngkir']);



Route::get('tes','Tes@index');  