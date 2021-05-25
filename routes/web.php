<?php

Auth::routes();
Route::view('/', 'index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('seller/dashboard','SellerController@index')->middleware('auth');

Route::get('seller/products/category','ProductController@addCategory')->middleware('auth');
Route::post('seller/products/category','ProductController@insertCategory')->middleware('auth');
Route::get('seller/products/category/delete/{id}','ProductController@deleteCategory')->middleware('auth');

Route::get('seller/products','ProductController@products')->middleware('auth');
Route::get('seller/products/add','ProductController@add')->middleware('auth');
Route::post('seller/products/add','ProductController@insert')->middleware('auth');
Route::get('seller/products/update/{id}','ProductController@updateProduct')->middleware('auth');
Route::post('seller/products/update/{id}','ProductController@updateInsertProduct')->middleware('auth');

Route::get('seller/catalogs','CatalogController@catalogs')->middleware('auth');
Route::get('seller/catalogs/add','CatalogController@add')->middleware('auth');
Route::post('seller/catalogs/add','CatalogController@insert')->middleware('auth');
Route::get('seller/catalogs/delete/{id}','CatalogController@delete')->middleware('auth');

Route::get('seller/buyer-requests','SellerController@buyerRequests')->middleware('auth');
Route::get('seller/pending-orders','SellerController@pendingOrders')->middleware('auth');
Route::get('seller/history','SellerController@history')->middleware('auth');