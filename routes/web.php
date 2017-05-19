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

Route::get('/', 'FirmController@index');
Route::get('/firms', 'FirmController@getByPhonesCount');
Route::get('/maxium', 'FirmController@maxium');
Route::get('/messages', 'MessageController@index');
Route::post('/messages', 'MessageController@store');
Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@auth');
Route::get('/logout', 'UserController@logout');
Route::get('/messages/{id}/delete', 'MessageController@delete');
Route::get('/messages/{id}/edit', 'MessageController@edit');
Route::post('/messages/{id}/edit', 'MessageController@update');
