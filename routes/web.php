<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/add', 'App\Http\Controllers\ProductController@index')->name('product.add');
Route::post('/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/list', 'App\Http\Controllers\ProductController@list')->name('product.list');
Route::get('/show/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::delete('/delete/{id}', 'App\Http\Controllers\ProductController@delete')->name('product.delete');
