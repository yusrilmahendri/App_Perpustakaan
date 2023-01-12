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
Route::get('/','HomeController@index')->name('dashboard');

// get to data and crud authors
Route::get('/author/data','DataController@authors')->name('author.data');
Route::resource('author', 'AuthorController');

//get to data and crud books
Route::get('/book/data','DataController@books')->name('book.data');
Route::resource('book','BookController');

//get to data and crud pengguna
Route::get('/pengguna/data','DataController@pengguna')->name('pengguna.data');
Route::resource('pengguna','PenggunaController');