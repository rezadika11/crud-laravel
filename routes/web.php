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

Route::get('login', 'ControllerLogin@login');
Route::post('/postlogin', 'ControllerLogin@postlogin')->name('postlogin');
Route::get('/logout', 'ControllerLogin@logout')->name('logout');

Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {

    route::get('/about', 'DashboardController@about')->name('about');
    route::get('/dashboard', 'DashboardController@dashboard');
});

Route::group(['middleware' => ['auth', 'CekLevel:admin,user']], function () {
    route::get('/dashboard', 'DashboardController@dashboard');
    route::get('/blog', 'PegawaiController@index')->name('blog');
    route::get('/pegawaiexport', 'PegawaiController@pegawaiexport')->name('pegawaiexport');
    route::post('/pegawaiimport', 'PegawaiController@pegawaiimportexcel')->name('pegawaiimport');
    route::get('/tambahpegawai', 'PegawaiController@create')->name('tambahpegawai');
    route::post('/simpanpegawai', 'PegawaiController@store')->name('simpanpegawai');
});
