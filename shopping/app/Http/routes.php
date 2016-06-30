<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login', [
	'as' => 'user.login', 
	'uses' => 'Admin\LoginController@index'
]);
Route::post('admin/login', [
	'as' => 'user.handlelogin', 
	'uses' => 'Admin\LoginController@handlelogin'
]);
Route::get('admin/logout', [
	'as' => 'user.logout', 
	'uses' => 'Admin\LoginController@logout'
]);
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['admin']], function() {
	
	Route::get('/home', [
		'as' => 'admin.home', 
		'uses' => 'Homecontroller@index'
	]);
	Route::get('/password', [
		'as' => 'admin.password', 
		'uses' => 'Homecontroller@password_change'
	]);
	Route::post('/password', [
		'as' => 'admin.password', 
		'uses' => 'Homecontroller@update'
	]);
	Route::resource('category', 'CategoryController');
	Route::resource('product', 'ProductController');
	Route::resource('user', 'UserController');
	Route::get('/order', [
		'as' => 'admin.order',
		'uses' => 'OrderController@index'
		]);
	Route::get('/order/{id}/edit', [
		'as' => 'admin.order',
		'uses' => 'OrderController@edit'
		]);
	Route::get('/order/update/{status}/{id}', [
		'as' => 'admin.order',
		'uses' => 'OrderController@update'
		]);
	Route::delete('/order/{id}', [
		'as' => 'admin.order',
		'uses' => 'OrderController@destroy'
		]);
});
Route::get('user/login', [
	'as' => 'user.login', 
	'uses' => 'User\LoginController@index'
]);
Route::post('user/login', [
	'as' => 'user.handlelogin', 
	'uses' => 'User\LoginController@handlelogin'
]);
Route::get('user/logout', [
	'as' => 'user.logout', 
	'uses' => 'User\LoginController@logout'
]);
Route::group(['prefix' => 'user', 'namespace' => 'Client'], function() {

	Route::get('/home', [
		'as' => 'user.home', 
		'uses' => 'SiteController@index'
	]);
	Route::resource('/register', 'RegisterController');
});