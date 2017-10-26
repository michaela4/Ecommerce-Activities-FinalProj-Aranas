<?php
use App\Product;

Auth::routes();
Route::resource('cart', 'CartController');

Route::get('/', 'ProductsController@index')->name('home');
Route::get('/products/{product}', 'ProductsController@show');
Route::get('/delete/{id}', 'ProductsController@deleteProduct');
Route::get('/productList', 'ProductsController@showList');
Route::get('/home', 'HomeController@index');
Route::get('/clear', 'CartController@clear');

//for checkout, going to billing info first
Route::get('/paymentDetailsToBill', 'BillingInfoController@paymentDetails');
Route::post('/saveBillingInfo', 'BillingInfoController@store');

//then, go to shipping info 
Route::post('/saveShippingInfo', 'ShippingInfoController@store');
Route::get('/paymentDetails', 'ShippingInfoController@paymentDetails'); 

//saving shipping method, then to review order
Route::post('/saveShipping', 'UserShippingController@store');

Route::post('/finish', 'UserShippingController@finish');

