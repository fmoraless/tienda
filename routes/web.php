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


Route::bind('product', function($slug) {
    return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
    'as' => 'home',
    'uses' => 'StoreController@index'
]);

Route::get('product/{slug}', [
    'as' => 'product-detail',
    'uses' => 'StoreController@show'
]);


// Carrito ------------------//

Route::get('cart/show', [
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);


// Authentication routes....
Auth::routes();

Route::get('auth/login', [
    'as' => 'login-get',
    'uses' => 'Auth\LoginController@getLogin'
]);
Route::post('auth/login', [
    'as' => 'login-post',
    'uses' => 'Auth\LoginController@postLogin'
]);

Route::get('/home', 'HomeController@index')->name('home');
