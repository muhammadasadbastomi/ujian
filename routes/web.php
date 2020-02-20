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


Route::get('/','UjianController@get')
->name('ujian_index');
Route::post('/tambah','UjianController@create')
->name('ujian_tambah');
Route::get('/edit/{id}','UjianController@find')
->name('ujian_edit');
Route::put('/edit/{id}','UjianController@update')
->name('ujian_update');
Route::get('/hapus/{id}','UjianController@hapus')
->name('ujian_hapus');
