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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/read', function () {
    return view('read');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/viewallproducts', function () {
    return view('viewallproducts');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('usuarios', 'UserController@index');