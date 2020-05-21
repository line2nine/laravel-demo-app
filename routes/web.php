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
    return view('welcome');
});

Route::get('/login', 'LoginController@showFormLogin');

Route::post('/login', 'LoginController@login');

Route::get('/product', 'ProductController@showForm')->name('product');

Route::post('/result','ProductController@calculator')->name('result');

Route::get('/dictionary', 'DictionaryController@showForm');

Route::get('/translate', 'DictionaryController@dictionary');
