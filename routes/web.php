<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cat', function () {
    return view('cat');
});

Route::get('/marmot', function () {
    return view('marmot');
});

Route::get('/flamingo', function () {
    return view('flamingo');
});