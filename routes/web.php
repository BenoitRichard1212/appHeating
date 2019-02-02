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

Route::get('pieces', function () {
    return view('pieces');
});

Route::get('sensors', function () {
    return view('sensors');
});

Route::get('relais', function () {
    return view('relais');
});

Route::get('parametres', function () {
    return view('gsettings');
});

