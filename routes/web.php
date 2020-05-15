<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function(){
    return view('test');
});
Route::resource('product', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

/*
PHAN THUA CUA TEMPLATE
|
*/
Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);		
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


/*PHAN MOI THEM CHO PROJECT*/
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('', ['as' => 'menu.category', 'uses' => 'CategoryController@category']);
        Route::get('edit/{id}', ['as' => 'menu.category_edit', 'uses' => 'CategoryController@edit']);
        Route::post('edit/{id}', ['as' => 'menu.post_edit', 'uses' => 'CategoryController@postEdit']);
        Route::get('add', ['as' => 'menu.category_add', 'uses' => 'CategoryController@add']);
    });

    Route::group(['prefix' => 'dishes'], function () {
        Route::get('', ['as' => 'menu.dishes', 'uses' => 'DishesController@dishes']);
        Route::get('edit/{id}', ['as' => 'dishes.edit', 'uses' => 'DishesController@edit']);
        Route::get('add', ['as' => 'dishes.add', 'uses' => 'DishesController@add']);
    });
	
});

Route::group(['middleware' => 'auth'], function () {
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('cashier_list', ['as' => 'staff.cashier_list', 'uses' => 'StaffController@staff']);
	Route::get('edit', ['as' => 'staff.edit', 'uses' => 'StaffController@edit']);
	Route::get('add', ['as' => 'staff.add', 'uses' => 'StaffController@add']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('client', ['as' => 'customer.client', 'uses' => 'ClientController@customer']);
	Route::get('edit', ['as' => 'customer.edit', 'uses' => 'ClientController@edit']);
	Route::get('add', ['as' => 'customer.add', 'uses' => 'ClientController@add']);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
