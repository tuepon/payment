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

Route::get('/', 'PaymentsController@index');
Route::get('/target', 'TargetsController@index');

Route::resource('payment', 'PaymentsController');
Route::resource('target', 'TargetsController');

