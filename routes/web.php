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

Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/', function () {
    return view('inicio');
});
Route::get('/tienda', function () {
    return view('tienda');
});
Route::get('/login2', function () {
    return view('login2');
});
Route::get('/register2', function () {
    return view('register2');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
