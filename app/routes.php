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

Route::get('/', 'StoreController@index');
Route::get('/product/{id}', 'StoreController@singleProduct');

Route::resource('/admin/products', 'ProductsController');

//registration

Route::get('users/signup', 'UsersController@create');
Route::post('users/signup', 'UsersController@store');

Route::get('users/signin', 'UsersController@getSignin');
Route::post('users/signin', 'UsersController@postSignin');

Route::get('users/signout', 'UsersController@getSignout');


//Route::get('/admin/products', 'ProductsController@showProduct');

//Route::get('/', function()
//{
    //testing
    //$names = Items::lists('id','name');
    //var_dump($names);

    //$items = Items::all();
    //foreach($items as $item)
    //{
    //    echo $item->name."...<br>";
    //}

//	return View::make('home');
//});


