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

Route::get('/', 'ProductController@index')->middleware('guest');
Route::get('/list', 'ProductController@product_list')->middleware('guest');

Route::get('/products/{id}', 'ProductController@show');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');
    Route::post('/products', 'ProductController@store')->name('products.store');
    Route::patch('/products/{id}', 'ProductController@update')->name('products.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
});
Route::get('/home', 'HomeController@index');
