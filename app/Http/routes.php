<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/search', 'SearchController@index');


Route::get('/show{get}', 'SearchController@show');


Route::get('/moviepost', 'MovieController@create');


Route::get('/createMovie', 'UploadController@fetch');
Route::post('/createMovieCheck', 'UploadController@postCheck');
Route::post('/createMovieSubmit', 'UploadController@store');