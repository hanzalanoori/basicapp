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


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/messages', 'UserController@index')->name('user.index');
Route::get('/delete/{id}', 'UserController@destroy');
Route::get('/editMessages/{id}', 'UserController@edit')->name('editMessage');
Route::post('users/store', 'UserController@store')->name('user.store');
Route::post('users/update', 'UserController@update')->name('user.update');
Route::post('users/update/{id}', 'UserController@update')->name('editMessages');
