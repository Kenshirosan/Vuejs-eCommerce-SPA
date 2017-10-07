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
Auth::routes();

//users routes
Route::get('/', function(){
    return view('welcome');
});

Route::get('/products', 'ShopController@index');
Route::get('/product/{slug}', 'ShopController@show');
Route::post('/messages', 'MessagesController@store');

//admin routes;
Route::get('/admin', 'AdminController@index');
Route::get('/admin/categories', 'CategoryController@create');
Route::post('/admin/categories', 'CategoryController@store');
Route::post('/add-product', 'ProductController@store');
Route::get('/admin/messages', 'MessagesController@index');
Route::get('/admin/messages/{id}', 'MessagesController@show');



