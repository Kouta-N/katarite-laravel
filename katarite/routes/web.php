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
Route::get('/items/my-page', 'ItemController@showMyPage')->name('items.my-page');
Route::resource('/items', 'ItemController')->except(['index'])->middleware('auth');
Route::post('/checkout', 'CartController@checkout')->name('checkout');