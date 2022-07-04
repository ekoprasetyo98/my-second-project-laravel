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
    return view('index');
});

Route::get('/siswa','SiswaController@getData');
Route::get('/getAll','SiswaController@getAllData');
Route::post('/input','SiswaController@input');
Route::get('/siswa/detail/{id}','SiswaController@getById');
Route::get('/siswa/delete/{id}','SiswaController@delete');
Route::get('/find','SiswaController@find');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::put('/update/{id}','SiswaController@update');
