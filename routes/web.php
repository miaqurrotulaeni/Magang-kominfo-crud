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

Route::get('/siswa1','SiswaController@index');
Route::post('/siswa1/create','SiswaController@create');
Route::get('/siswa1/{id?}/edit','SiswaController@halaman_edit');
Route::post('/siswa1/{id?}/proses_edit','SiswaController@update');
Route::get('/siswa1/{id?}/hapus', 'SiswaController@delete');
