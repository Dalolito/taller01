<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeControllers\HomeController@index')->name("home.index");
Route::get('/addProduct', 'App\Http\Controllers\ProductControllers\ProductController@index')->name("products.addProduct");