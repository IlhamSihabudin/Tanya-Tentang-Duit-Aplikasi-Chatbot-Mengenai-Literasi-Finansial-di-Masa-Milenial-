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

Route::get('/', 'PendaftaraanController@index');
Route::view('/barcode', 'barcode')->name('barcode');
Route::post('/home', 'PendaftaraanController@login')->name('login.user');
Route::post('/', 'PendaftaraanController@store')->name('daftar.store');
Route::post('/kota', 'PendaftaraanController@kota')->name('show_kota');
Route::get('/logout', 'PendaftaraanController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function (){
	Route::get('/', 'AdminController@login_index');
	Route::post('/home', 'AdminController@login')->name('login.admin');
	Route::get('/home', 'AdminController@index');
	Route::get('/logout', 'AdminController@logout')->name('logout.admin');
});