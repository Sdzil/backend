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

Route::get('/index_group', "FrontController@index_group");

Route::get('/news', "FrontController@news");

Route::get('/news_info/{something}', "FrontController@news_info");

Route::get('/products', "FrontController@products");

Route::get('/product_info/{something}', "FrontController@product_info");

Route::get('/product_type/{something}', "FrontController@product_types");

Route::get('/contact_us', "FrontController@contact_us");

Route::post('/get_something', "FrontController@get_form");

Route::get('/contact_us_group', "FrontController@contact_us_group");

Route::post('/send_form', "FrontController@get_form_group");

//登入驗證測試
// Route::get('/admin', "LoginController@admin")->middleware('auth');

// Route::post('/send_data', "FrontController@send");

// Route::post('/news_manage', "LoginController@news_manage");

// Route::get('/success', "LoginController@success");

// Route::get('/data', "LoginController@data");

Route::resource('sample', 'SampleController');

Route::post('sample/update', 'SampleController@update')->name('sample.update');

Auth::routes(['register' => false,'reset' => false]);
// Auth::routes();



//controller在5.3板之後已不推薦使用，所以改用resource或者get或post
// Route::controller('/datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables'
// ]);

// Route::resource('/datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables'
// ]);

// Route::get('datatables', 'DatatablesController@getIndex');
// Route::get('datatables.data', 'DatatablesController@anyData')->name('datatables.data');


//後台管理系統的Route，群組之後統一在admin做中介認證
//修改為 除了登入之外，還是要role為admin或者是super_admin身分才可以

//原本的方法，只要求需要登入才能看後台
// Route::prefix('admin')->middleware(['auth'])->group(function(){

    Route::get('/admin', 'HomeController@index')->name('home');

//修改後，必須要登入以及admin  admin給業主
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){

    // Route::get('/', 'HomeController@index')->name('home');

    //最新消息管理
    Route::get('news', 'NewsController@index');
    Route::get('news/create', 'NewsController@create');
    Route::post('news/store', 'NewsController@store');
    Route::get('news/edit/{id}', 'NewsController@edit');
    Route::post('news/update/{id}', 'NewsController@update');
    Route::get('news/destroy/{id}', 'NewsController@destroy');

    //產品管理
    Route::get('items', 'ItemController@index');
    Route::get('items/create', 'ItemController@create');
    Route::post('items/store', 'ItemController@store');
    Route::get('items/edit/{id}', 'ItemController@edit');
    Route::post('items/update/{id}', 'ItemController@update');
    Route::get('items/destroy/{id}/{name?}', 'ItemController@destroy');

    Route::post('/ajax_upload_img', 'ItemController@ajax_upload_img');
    Route::post('/ajax_delete_img', 'ItemController@ajax_delete_img');
    Route::post('/ajax_delete_img_in_DB', 'ItemController@ajax_delete_img_in_DB');



    //產品類別管理
    Route::get('item_types', 'ItemTypeController@index');
    Route::get('item_types/create', 'ItemTypeController@create');
    Route::post('item_types/store', 'ItemTypeController@store');
    Route::get('item_types/edit/{id}', 'ItemTypeController@edit');
    Route::post('item_types/update/{id}', 'ItemTypeController@update');
    Route::get('item_types/destroy/{id}', 'ItemTypeController@destroy');

    //聯絡表單管理
    Route::get('contacts', 'ContactController@index');
    Route::get('contacts/create', 'ContactController@create');
    Route::post('contacts/store', 'ContactController@store');
    Route::get('contacts/edit/{id}', 'ContactController@edit');
    Route::post('contacts/update/{id}', 'ContactController@update');
    Route::get('contacts/destroy/{id}', 'ContactController@destroy');

});

//super_admin為開發端
Route::prefix('admin')->middleware(['super_admin'])->group(function(){

    //帳號管理
    Route::get('accounts', 'AccountController@index');
    Route::get('accounts/create', 'AccountController@create');
    Route::post('accounts/store', 'AccountController@store');
    Route::post('accounts/destroy/{id}', 'AccountController@destroy');


});
