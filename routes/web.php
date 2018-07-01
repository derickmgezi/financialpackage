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
Route::get('/', 'UserController@index');

Route::get('purchase', 'PurchaseController@index');

Route::get('vendor', 'PurchaseController@vendor_index');

Route::get('registervendor', 'PurchaseController@vendor_registration');


