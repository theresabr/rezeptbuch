<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController')->middleware('auth');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');



/*
Route::get('/', function () {
    return view('welcome');
});

Route::resource('products','ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/