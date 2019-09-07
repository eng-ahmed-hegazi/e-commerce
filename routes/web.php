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

Route::get('/','FrontEndController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function() {
    Route::resource('products', 'ProductController');
    Route::resource('categories', 'CategoriesController');
});

# display products in client view
Route::get('product/{id}','FrontEndController@singleproduct')->name('products.single');

# cart Route add / show / update
Route::post('card/add','ShoppingController@add')->name('card.add');
Route::get('cart/','ShoppingController@show')->name('cart.index');
Route::get('cart/delete/{id}','ShoppingController@delete')->name('cart.delete');
Route::get('cart/minus/{id}/{qty}','ShoppingController@minus')->name('cart.minus');
Route::get('cart/plus/{id}/{qty}','ShoppingController@plus')->name('cart.plus');
Route::get('cart/plus/{id}','ShoppingController@rapid')->name('cart.rapid.add');
Route::get('cart/checkout','CheckoutController@index')->name('cart.checkout');
Route::post('cart/checkout','CheckoutController@pay')->name('cart.pay');