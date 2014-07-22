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

//admin (uses resourceful routing ie is RESTful)
Route::resource('admin/products', 'ProductsController');

//store
Route::get('/', 'StoreController@index');
Route::get('product/{id}', 'StoreController@singleProduct');
Route::get('cart', 'StoreController@showCart');
Route::post('cart', 'StoreController@addToCart');
Route::get('cart/remove/{identifier}', 'StoreController@removeFromCart');
Route::post('cart/update', 'StoreController@updateCart');
Route::get('checkout', 'StoreController@checkout');

//registration
Route::get('signup', 'UsersController@showSignUp');
Route::post('signup', 'UsersController@signUp');
Route::get('signin', 'UsersController@showSignIn');
Route::post('signin', 'UsersController@signIn');
Route::get('signout', 'UsersController@signOut');

