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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/index/{id}','UserController@index');

Route::get('/customer/index','CustomerController@index');
Route::get('/customer/tambah','CustomerController@tambah');
Route::post('/customer/store','CustomerController@store');
Route::get('/customer/hapus/{id}','CustomerController@hapus');
Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('/customer/edit/update','CustomerController@update');
Route::get('/customer/cetak_pdf','CustomerController@cetak_pdf');
Route::get('/customer/cari','CustomerController@cari');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
