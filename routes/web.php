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

Route::get('/', 'categoryController@categories')->name('index');
Route::get('/category/{categoryId}', 'categoryController@category')->name('category');
Route::get('/category/{category_id}/brand/{brand_id}', 'brandController@index')->name('brand');
Route::get('/category/{category_id}/brand/{brand_id}/items', 'itemController@index')->name('items');
Route::get('/category/{category_id}/brand/{brand_id}/item/{item_id}', 'itemController@item')->name('item');
