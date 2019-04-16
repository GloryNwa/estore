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

//Public Site
Route::get('/',  'formController@index')->name("index");
Route::get('/index',  'formController@index')->name("index");

Route::post('/form',   'formController@form')->name("form");
Route::get('/callback','formController@callback')->name("callback");

Route::get('/paypal',  'formController@loadpaypal')->name("loadpaypal");
Route::get('/successful', 'formController@successful')->name("successful");

Route::any('/payment/success/{custom}', 'formController@success');





// Admin Controller for Admin Control Panel

Route::group(['middleware'=>['auth']], function (){
Route::get('/logout',           'AdminController@logout')->name("logout");
//Dashbord
Route::get('/admin',             'HomeController@admin')->name('admin');
Route::get('/admin',             'AdminController@admin')->name("admin");


Route::get('/cancel',            'AdminController@cancel')->name("cancel");


// Total Orders
Route::get('/allproducts',       'AdminController@allproducts')->name("allproducts");
Route::post('/search',           'AdminController@search')->name("search");
Route::get('/orders',            'AdminController@orders')->name("orders");
Route::get('/searchOrders',      'AdminController@searchOrders')->name("searchOrders");
Route::post('/edit',             'AdminController@edit')->name("edit");
Route::get('/edit_orders/{id}',  'AdminController@edit_orders')->name("edit_orders");

// Successful Orders
Route::get('/successful_orders', 'AdminController@successful_orders')->name("successful_orders");
Route::post('/success',          'AdminController@success')->name("success");
Route::get('/successOrders',     'AdminController@successOrders')->name("successOrders");




//Pending Orders
Route::post('/pendingOrders',    'AdminController@pendingOrders')->name("pendingOrders");
Route::get('/pending',           'AdminController@pending')->name("pending");
Route::get('/SearchPending',     'AdminController@SearchPending')->name("SearchPending");

// Cancelled Orders
Route::post('/cancelled',        'AdminController@cancelled')->name("cancelled");
Route::get('/cancelledorders',   'AdminController@cancelledorders')->name("cancelledorders");
Route::get('/cancelled_orders',  'AdminController@cancelled_orders')->name("cancelled_orders");

});