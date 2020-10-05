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

Route::get('/', "FrontController@index1");
// Route::get('/', "FrontController@testfunciotn1");



// Route::get('/index', "FrontController@index");

Route::get('/news', "FrontController@news");

Route::get('/news_info/{something}', "FrontController@news_info");



Route::get('/contact_us', "FrontController@contact_us");

Route::post('/get_something', "FrontController@get_form");
// Route::get('/admin', "LoginController@admin");
Route::get('/admin', "LoginController@admin")->middleware('auth');

Route::post('/send_data', "FrontController@send");

Route::post('/news_manage', "LoginController@news_manage");

Route::get('/success', "FrontController@success");

Route::get('/data', "LoginController@data");

Route::resource('/sample', 'SampleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//controller在5.3板之後已不推薦使用，所以改用resource或者get或post
// Route::controller('/datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables'
// ]);

// Route::resource('/datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables'
// ]);

Route::get('datatables', 'DatatablesController@getIndex');
Route::get('datatables.data', 'DatatablesController@anyData')->name('datatables.data');


