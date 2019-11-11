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

Route::get('/', 'SiteController@home');
Route::get('/about', 'SiteController@about');

Route::get('/login',  'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');

//Route berikut bisa diakses oleh 2 role (admin, siswa)
Route::group(['middleware' => ['auth', 'checkRole:admin']], function() {
    Route::get('/siswa', 'SiswaController@index');
    Route::post('/siswa/create', 'SiswaController@create');
    Route::get('/siswa/{siswa}/edit', 'SiswaController@edit');
    Route::post('/siswa/{siswa}/update', 'SiswaController@update');
    Route::get('/siswa/{siswa}/delete', 'SiswaController@delete');
    Route::get('/siswa/{siswa}/profile', 'SiswaController@profile');
    Route::post('/siswa/{siswa}/addnilai', 'SiswaController@addnilai');
    Route::get('/siswa/{siswa}/{idmapel}/deletenilai', 'SiswaController@deletenilai');
    Route::get('siswa/exportexcell', 'SiswaController@exportExcell');
    Route::get('siswa/exportpdf', 'SiswaController@exportPdf');
    Route::get('/guru/{guru}/profile', 'GuruController@profile');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,user']], function() {
    Route::get('/dashboard', 'DashboardController@index');
});


