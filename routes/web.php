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



Route::get('/', 'AdminController@form');

Route::get('/admin', 'AdminController@form');
Route::post('/admin', 'AdminController@login');
Route::get('/admin/inicio', 'AdminController@index');
Route::get('/admin/boleto', 'AdminController@boleto');


Route::get('/logout','AdminController@logout');
