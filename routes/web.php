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
    return view('auth/login');
});





Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index')->name('barang.index');
Route::get('/barang/create', 'BarangController@create')->name('barang.create');
Route::POST('/barang/store', 'BarangController@store')->name('barang.store');
Route::get('/barang/show/{id}', 'BarangController@show')->name('barang.show');
Route::get('/barang/edit/{barang}', 'BarangController@edit')->name('barang.edit');
Route::put('/barang/{barang}', 'BarangController@update')->name('barang.update');
Route::get('/barang/destroy/{barang}', 'BarangController@destroy')->name('barang.destroy');

Route::get('/jenis', 'JenisController@index')->name('jenis.index');
Route::get('/jenis/create', 'JenisController@create')->name('jenis.create');
Route::POST('/jenis/store', 'JenisController@store')->name('jenis.store');
Route::get('/jenis/edit/{jenis}', 'JenisController@edit')->name('jenis.edit');
Route::put('/jenis/{jenis}', 'JenisController@update')->name('jenis.update');
Route::get('/jenis/destroy/{jenis}', 'JenisController@destroy')->name('jenis.destroy');

Route::get('/CV', 'HomeController@cv')->name('cv');

});