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
Route::get('/category/{slug}', /*['as' => 'category', 'uses' =>*/ 'categoryController@show')->name('category');

Route::get('/category/{slug}/brand/{brandsSlug}', /*['as' => 'brand_in_category', 'uses' =>*/'itemController@index')->name('items');

Route::get('/product/{itemSlug}', /*['as' => 'item', 'uses' => */'itemController@item')->name('item');

//not use yet
Route::get('/brand/{brand_slug}', ['as' => 'brand', 'uses' => 'brandController@index'])->name('brand');

