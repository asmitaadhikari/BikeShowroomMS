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

//Admin Parts
Route::get('/welcome', function() {
    return view('welcome');
});
Route::get('/admindashboard', function() {
    return view('Admin.admindashboard');
});
Route::get('/products', function() {
    return view('Admin.products');
});
Route::get('/Booking', function() {
    return view('Booking');
});
Route::get('/editprofile', function() {
    return view('editprofile');
});

 //from User Dashboard



 Route::get('/ProductCategory','ProductController@category');
 
 Route::get('/Description/{id}','ProductController@description');

Auth::routes();

// Route:: group(['middleware'=>'admin'],function(){
//     Route::get('/admindashboard','AdminController@dashboard');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('/Insertproduct','ProductController@index');

Route::delete('/Insertproduct/{id}','ProductController@destroy');

Route::put('/product','BookController@store');

//Posting data


Route::get('/Insertproduct','ProductController@getProductType'); ///fetching


route::post('/InsertProductCategory','ProductTypeController@store');
Route::get ('/InsertProductCategory','ProductTypeController@index');


route::post('/Insertproduct','ProductController@store');


Route::put('/Booking/{id}','BookController@show');