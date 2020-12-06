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

Route::get('/', 'HomeController@index');
Route::get('/layout', 'HomeController@layout')->name('dashboard');
Route::get('/users', 'HomeController@users')->name('users');

Route::get('/test', 'CategoryController@test')->name('test');

Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('clas', 'ClasController');
Route::resource('siswa', 'MuridController');
Route::resource('extra', 'EkstraController');
