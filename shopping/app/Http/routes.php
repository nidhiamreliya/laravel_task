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

Route::group(['namespace' => 'User\Client', 'middleware' => ['client']], function() {
	
	Route::resource('/user', 'UserController');
	Route::post('user/login', [
		'as' => 'user.login', 
		'uses' => 'UserController@handlelogin'
	]);
	Route::get('/logout', [
		'as' => 'user.logout', 
		'uses' => 'UserController@logout'
	]);
	Route::post('user/{id}', [
		'as' => 'user.update',
		'uses' => 'UserController@update'
	]);
	Route::get('/checkout', [
		'as' => 'user.checkout', 
		'uses' => 'OrderController@checkout'
	]);
	Route::get('/password', [
		'as' => 'user.password', 
		'uses' => 'UserController@forgot_psw'
	]);
	Route::post('/password', [
		'as' => 'user.password', 
		'uses' => 'UserController@handlePassword'
	]);
	Route::get('/password/{token}', [
		'as' => 'password.change', 
		'uses' => 'UserController@change_psw'
	]);
	Route::post('/password/{token}', [
		'as' => 'password.change', 
		'uses' => 'UserController@psw_change'
	]);
	Route::post('/order', [
		'as' => 'user.order', 
		'uses' => 'OrderController@order'
	]);
	Route::get('/order/{no}', [
		'as' => 'user.order', 
		'uses' => 'OrderController@bill'
	]);
	Route::get('/orders', [
		'as' => 'user.orders', 
		'uses' => 'OrderController@track_order'
	]);
	Route::get('/order/details/{order}', [
		'as' => 'order.details', 
		'uses' => 'OrderController@details'
	]);
});
Route::group(['namespace' => 'User'], function() {
	
	Route::get('/', [
		'as' => 'user.home', 
		'uses' => 'SiteController@index'
	]);
	Route::get('product/{slug}', [
		'as' => 'user.home', 
		'uses' => 'SiteController@product'
	]);
	Route::get('jewellery', [
		'as' => 'user.jewellery', 
		'uses' => 'SiteController@products'
	]);
	Route::get('jewellery', [
		'as' => 'user.jewellery', 
		'uses' => 'SiteController@products'
	]);
	Route::post('jewellery', [
		'as' => 'user.jewellery', 
		'uses' => 'SiteController@product_list'
	]);
	Route::get('category/{slug}', [
		'as' => 'user.jewellery', 
		'uses' => 'SiteController@category'
	]);
	Route::post('category/{slug}', [
		'as' => 'user.jewellery', 
		'uses' => 'SiteController@category_list'
	]);
	Route::post('cart/add', [
		'as' => 'cart.add', 
		'uses' => 'CartController@store'
	]);
	Route::get('cart', [
		'as' => 'cart.add', 
		'uses' => 'CartController@index'
	]);
	Route::post('cart/remove', [
		'as' => 'cart.remove', 
		'uses' => 'CartController@destroy'
	]);
	Route::post('cart/update', [
		'as' => 'cart.update', 
		'uses' => 'CartController@update'
	]);
	Route::post('cart/count', [
		'as' => 'cart.count', 
		'uses' => 'CartController@count'
	]);
});