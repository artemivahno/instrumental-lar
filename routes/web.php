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

Route::get('/', 'categoryController@index')->name('index');

Route::post('/categories', 'categoryController@store');
Route::get('/categories/create', 'categoryController@category_create')->name('category_create');
Route::get('/admin/categories', 'categoryController@categoriesAll')->name('categories');

Route::resource('category','categoryController');
Route::get('/category/{slug}','categoryController@show')->name('category');


Route::get('/products', 'productController@index')->name('products');
Route::post('/products', 'productController@store');
Route::get('/products/create', 'productController@product_create')->name('product_create');

Route::get('/category/{slug}/brand/{brandsSlug}', /*['as' => 'brand_in_category', 'uses' =>*/'itemController@index')->name('items');

Route::get('/product/{itemSlug}', /*['as' => 'item', 'uses' => */'itemController@item')->name('item');

//not use yet
Route::get('/brand/{brand_slug}', ['as' => 'brand', 'uses' => 'brandController@index'])->name('brand');


Auth::routes();
