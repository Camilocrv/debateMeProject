<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/index', 'home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

 Route::post('/', 'PosteoController@makePosteo')->name('makePost');
