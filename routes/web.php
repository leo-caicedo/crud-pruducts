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

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/home', 'PageController@products');
//Route::get('/home/{product}', 'PageController@product')->name('product');

// Product
Route::resource('products', 'Backend\ProductController');

// Marcas
Route::resource('brands', 'Backend\BrandController');
