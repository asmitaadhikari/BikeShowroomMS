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

Route::get('/', function () {
    return view('index'); 
});

Route::get('/cart', function() {
    return view('cart');
});
Route::get('/Login', function() {
    return view('Login');
 
 });

Route::get('/register', function() {
    return view('register');
});

Route::get('/Bikecategory', function() {
    return view('Bikecategory');
});

Route::get('/Adminnav', function() {
    return view('Adminnav');
});
Route::get('/Insertbike', function() {
    return view('Insertbike');
});

Route::get('/Insertscotter', function() {
    return view('Insertscotter');
});

Route::get('/bike','BikeController@create');
route::post('/Bike','BikeController@store');

Route::get('/Registration','PostsController@create');
Route::post('/regis','PostsController@store');

Route::get('/admindashboard', function() {
    return view('admin.admindashboard');
});

// Route::post('/Registration', function() {
//   return view('Register');

// });






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/layout', function(){
    return view('Navigation.layouts');
}); 

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/Index', 'logincontrollerController@index')->name('Index');