<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PajakController@daftar');

Route::get('/cek', function () {
    return view('layouts.admin');
});

Route::get('/form', function () {
    return view('pajak');
});

Route::get('/daftar','PajakController@daftar');
Route::resource('jenis','JenisController');
Route::resource('sudut','SudutController');
Route::resource('ruang','RuangController');
Route::resource('jalan','JalanController');
Route::resource('pajak','PajakController');
