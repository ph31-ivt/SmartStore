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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function() {
	return view('admins.index'); 
})->name('admin.index');
//Route of categories
Route::get('/admin/categories', 'CategoryController@index')->name('admin.categories.index');
Route::get('/admin/categories/create', 'CategoryController@create')->name('admin.categories.create');
Route::post('/admin/categories/create','CategoryController@store')->name('admin.categories.store');
//Route of producters
Route::get('/admin/producters', 'ProducterController@index')->name('admin.producters.index');
Route::get('/admin/producters/create', 'ProducterController@create')->name('admin.producters.create');
Route::post('/admin/producters/store', 'ProducterController@store')->name('admin.producters.store');
//Route of products
Route::get('admin/products', 'ProductController@index')->name('admin.products.index');
Route::get('admin/products/create', 'ProductController@create')->name('admin.products.create');
Route::post('admin/products/store','ProductController@store')->name('admin.products.store');
Route::get('admin/products/edit','ProductController@edit')->name('admin.products.edit');
//Route of product details
Route::get('admin/products/details', 'ProductDetailController@index')->name('admin.products.deatails.index');
/*route::get('/test', function(){
	return view('admins.producters.index');
});