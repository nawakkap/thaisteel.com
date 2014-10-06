<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SearchController@index');
Route::post('/search', 'SearchController@doAddToCart');
Route::post('/cart_remove', 'SearchController@doRemoveFromCart');
Route::post('/cart_update', 'SearchController@doUpdateCart');
Route::post('/cart_destroy', 'SearchController@doDestroyCart');
Route::post('order/checkout', 'OrderController@doCheckout');
Route::get('/api/price_by_product_name', 'ApiController@doSearchPriceByProductName');
Route::get('/results', 'SearchController@doShowResults');
// Route::get('admin' , 'AdminLoginController@showLogin');
Route::post('admin_login', 'AdminLoginController@doLogin');
Route::get('admin/home', "ProductController@showView");
Route::get('admin/logout', "AdminLoginController@doLogout");
Route::post('admin/prices/import', 'PriceController@doImport');
Route::get('user_login', 'UserLoginController@showLogin');
Route::post('user_login', 'UserLoginController@doLogin');
Route::post('user/do_login', 'UserLoginController@doLogin');
Route::get('user/logout', 'UserLoginController@doLogout');
Route::post('user/logout', 'UserLoginController@doLogout');
Route::get('user_clients/change_password', 'UserClientController@changePassword');
Route::post('user_clients/change_password', 'UserClientController@doChangePassword');

Route::get('/api/get_price', 'ApiController@doQueryPrice');
Route::post('/api/get_price', 'ApiController@doQueryPrice');

Route::resource('user_clients', 'UserClientController');
Route::resource('user/orders', 'OrderController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/orders', 'AdminOrderController');
Route::resource('admin/users', 'UserController');
Route::resource('admin/prices', 'PriceController');
Route::resource('admin/product_names', 'ProductNameController');
Route::resource('admin/product_user_mapping', 'ProductOfUserController');