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

Auth::routes();
Route::get('/', 'ItemController@index')->name('items.index');
Route::resource('/items', 'ItemController')->except(['index','show'])->middleware('auth');
Route::resource('/items', 'ItemController')->only(['show']);
Route::post('/checkout', 'CartController@checkout')->name('checkout');
Route::get('/cart/report', 'CartController@report')->name('cart.report');