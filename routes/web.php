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

Route::get('/', 'MenuController@index')->name('home');
Route::post('add-to-cart', 'CartController@addToCart');
Route::post('remove-from-cart', 'CartController@removeFromCart');
Route::post('increment-cart-item', 'CartController@incrementCartItem');
Route::post('decrement-cart-item', 'CartController@decrementCartItem');
Route::post('apply-discount', 'CartController@applyDiscount');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
