<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','frontController@index');
Route::get('/about','frontController@about')->name('about');
Route::get('/rooms','frontController@rooms')->name('rooms');
Route::get('/contact','frontController@contact')->name('contact');
Route::get('/booking','frontController@booking')->name('booking');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
        Route::get('/',function (){
            return view('admin.index');
        })->name('admin.index');
});
