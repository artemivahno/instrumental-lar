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

Route::get('/', ['as' => 'home', 'uses' => 'categoryController@categories'])->name('index');
Route::get('/category/{categoryId}', ['as' => 'category', 'uses' => 'categoryController@category'])->name('category');
//not use yet
Route::get('/category/{category_id}/brand/{brand_id}', ['as' => 'brand', 'uses' => 'brandController@index'])->name('brand');

Route::get('/category/{category_id}/brand/{brand_id}/items', ['as' => 'brand_in_category', 'uses' =>'itemController@index'])->name('items');
Route::get('/category/{category_id}/brand/{brand_id}/item/{item_id}', ['as' => 'item', 'uses' => 'itemController@item'])->name('item');
