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
    return view('welcome2');
});



Route::get('/EditProduct', function() {
    return view('Admin.EditProduct');
});

Route::get('/About', function() {
    return view('About');
});

Route::get('/About', function() {
    return view('About');
});

Route::get('/Billing', function() {
    return view('Admin.Billing');
});

Route::get('/Order', function() {
    return view('Order');
});


Auth::routes();

// Route:: group(['middleware'=>'admin'],function(){
//     Route::get('/admindashboard','AdminController@dashboard');
// });

Route::get('/home', 'HomeController@index')->name('home');



//Posting data

//Admin Routes

Route::get('/products', function() {
    return view('Admin.products');
});

Route::get('/ViewOrder', function() {
    return view('Admin.ViewOrder');
});


Route::get ('/Viewbooking','BookController@show');
Route::get('/Insertproduct','ProductController@getProductType');
route::post('/InsertProductCategory','ProductTypeController@store');
Route::get ('/InsertProductCategory','ProductTypeController@index');
route::put('/EditProductCategory/{id}','ProductTypeController@update');
Route::get ('/EditProductCategory/{id}','ProductTypeController@edit');
route::put('/EditProduct/{id}','ProductController@update');
Route::get ('/EditProduct/{id}','ProductController@edit');
route::post('/Insertproduct','ProductController@store');
Route::get ('/Insertproduct','ProductController@index');
Route::delete('/Insertproduct/{id}','ProductController@destroy');
Route::get ('/admindashboard','AdminController@show');

//Users Routes
// Route::post('/Booking','BookController@store');

Route::get('/ProductCategory','ProductController@category')->middleware('auth');
Route::get('/Description/{id}','ProductController@description')->middleware('auth');
Route::post('/Description/{id}','ProductController@book');
Route::get('/Booking','BookController@create');

Route::post('/Booking', 'BookController@create');

// add booking to order
Route::post('/order','BookController@order');



