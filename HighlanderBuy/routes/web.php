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
	return redirect('/users/login');
});

Route::get('/users/login', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::get('/users/profile', 'UserController@profile');
Route::post('/users', 'UserController@store');

Route::get('/items/showall', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');
