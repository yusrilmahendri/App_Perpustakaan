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

Route::get('/','Frontend\\BookController@index');
Route::get('/book/{book}','Frontend\\BookController@show')->name('book.show');
Route::post('/book/{book}/borrow','Frontend\\BookController@borrow')->name('book.borrow')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');