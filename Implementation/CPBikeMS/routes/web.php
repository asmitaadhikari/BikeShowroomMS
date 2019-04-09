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

Route::get('/Booking', 'BookController@show')->middleware('auth');
Route::get('/editprofile', function() {
    return view('editprofile');
});
Route::get('/About', function() {
    return view('About');
});

 Route::get('/ProductCategory','ProductController@category')->middleware('auth');
 
 Route::get('/Description/{id}','ProductController@description')->middleware('auth');

Auth::routes();

// Route:: group(['middleware'=>'admin'],function(){
//     Route::get('/admindashboard','AdminController@dashboard');
// });

Route::get('/home', 'HomeController@index')->name('home');



Route::put('/product','BookController@store');

//Posting data

//Admin Routes
Route::get('/admindashboard', function() {
    return view('Admin.admindashboard');
});
Route::get('/products', function() {
    return view('Admin.products');
});
Route::get('/Insertproduct','ProductController@getProductType');
route::post('/InsertProductCategory','ProductTypeController@store');
Route::get ('/InsertProductCategory','ProductTypeController@index');
route::post('/EditProductCategory/{id}','ProductTypeController@store');
Route::get ('/EditProductCategory/{id}','ProductTypeController@index');
route::post('/Insertproduct','ProductController@store');
Route::get ('/Insertproduct','ProductController@index');
Route::delete('/Insertproduct/{id}','ProductController@destroy');

//Users Routes

Route::put('/Booking/{id}','BookController@show')->middleware('auth');




