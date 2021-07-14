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

/* singola route home */
Route::get('/', 'PageController@home')->name('home');

/* 7 route CRUD */
/* Route::resource('movies', 'MovieController'); */

/* equivale ad aver scritto questo */
Route::get('movies', 'MovieController@index')->name('movies');
Route::get('movies/create', 'MovieController@create')->name('movies.create');
Route::post('movies', 'MovieController@store')->name('movies.store');
Route::get('movies/{movie}', 'MovieController@show')->name('movies.show');
Route::get('movies/{movie}/edit', 'MovieController@edit')->name('movies.edit');
Route::put('movies/{movie}', 'MovieController@update')->name('movies.update');
Route::delete('movies/{movie}', 'MovieController@destoy')->name('movies.destroy');
