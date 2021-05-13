<?php

Auth::routes();
Route::view('/', 'index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('seller/dashboard','SellerController@index')->middleware('auth');

Route::get('seller/products','ProductController@products')->middleware('auth');
Route::get('seller/products/add','ProductController@add')->middleware('auth');

Route::get('seller/catalogs','CatalogController@catalogs')->middleware('auth');
Route::get('seller/catalogs/add','CatalogController@add')->middleware('auth');