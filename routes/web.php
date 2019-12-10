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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/beranda', 'PagesController@beranda');

Route::get('/Kamar', 'KamarsController@index');
Route::get('/Kamar/create', 'KamarsController@create');
Route::post('/Kamar', 'KamarsController@store');
Route::get('/Kamar/{kamars}/edit', 'KamarsController@edit');
Route::put('/Kamar/{kamars}','KamarsController@update');