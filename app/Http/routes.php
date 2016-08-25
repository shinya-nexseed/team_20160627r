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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/search', function () {
    return '<html><body><h1>serarch</h1><p>this is sample page.</p></body></html>';
});


Route::get('/show', function () {
    return '<html><body><h1>show</h1><p>this is sample page.</p></body></html>';
});