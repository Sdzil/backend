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

//前端頁面
Route::get('/', "FrontController@index");

// Route::get('/index', "FrontController@index");

Route::get('/news', "FrontController@news");

Route::get('/news_info/{something}', "FrontController@news_info");



Route::get('/contact_us', "FrontController@contact_us");

Route::post('/get_something', "FrontController@get_form");

//登入驗證測試
// Route::get('/admin', "LoginController@admin")->middleware('auth');

// Route::post('/send_data', "FrontController@send");

// Route::post('/news_manage', "LoginController@news_manage");

// Route::get('/success', "LoginController@success");

// Route::get('/data', "LoginController@data");

Route::resource('sample', 'SampleController');

Route::post('sample/update', 'SampleController@update')->name('sample.update');

Auth::routes(['register' => false,'reset' => false]);

Route::get('/admin', 'HomeController@index')->name('home');

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

Route::prefix('admin')->middleware(['auth'])->group(function(){


    //最新消息管理
    Route::get('news', 'NewsController@index');
    Route::get('news/create', 'NewsController@create');
    Route::post('news/store', 'NewsController@store');
    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/update/{id}', 'NewsController@update');
    Route::get('news/destory/{id}', 'NewsController@destroy');

    //產品管理
    Route::get('items', 'ItemsController@index');
    Route::get('items/create', 'ItemsController@create');
    Route::post('items/store', 'ItemsController@store');
    Route::get('items/edit/{id}', 'ItemsController@edit');
    Route::post('items/update/{id}', 'ItemsController@update');
    Route::get('items/destory/{id}', 'ItemsController@destroy');

});
