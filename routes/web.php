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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "FrontController@index");

// Route::get('/index', "FrontController@index");

Route::get('/news', "FrontController@news");

Route::get('/news_info/{something}', "FrontController@news_info");



Route::get('/contact_us', "FrontController@contact_us");

Route::post('/get_something', "FrontController@get_form");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
