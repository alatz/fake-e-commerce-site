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

//admin
Route::resource('/admin/products', 'ProductsController');

//store
Route::get('/', 'StoreController@index');
Route::get('/product/{id}', 'StoreController@singleProduct');

//cart
Route::get('cart', 'StoreController@showCart');
Route::post('cart', 'StoreController@addToCart');
Route::get('checkout', 'StoreController@checkout');
Route::get('cart/remove/{identifier}', 'StoreController@removeFromCart');
Route::post('cart/update', 'StoreController@updateCart');

//registration
Route::get('users/signup', 'UsersController@create');
Route::post('users/signup', 'UsersController@store');
Route::get('users/signin', 'UsersController@getSignin');
Route::post('users/signin', 'UsersController@postSignin');
Route::get('users/signout', 'UsersController@getSignout');

