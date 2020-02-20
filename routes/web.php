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

Route::get('/','UjianController@ujian_index')
->name('ujian_index');
Route::post('/ujian/tambah','UjianController@createIndex')
->name('ujian_tambah_index');
Route::post('/ujian/tambah','UjianController@create')
->name('ujian_tambah');
Route::get('/ujian/edit/{id}','UjianController@find')
->name('ujian_edit');
Route::put('/ujian/edit/{id}','UjianController@ujian_update')
->name('ujian_update');
Route::get('/ujian/hapus/{id}','UjianController@ujian_hapus')
->name('ujian_hapus');
