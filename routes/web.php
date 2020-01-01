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
    return view('home');
});

Route::get('/login', 'LibraryController@login');

Route::get('register','LibraryController@register');

Route::post('/home','LibraryController@insert');

//Route::get('/home', 'LibraryController@home');