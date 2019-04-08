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

//Auth routes
Route::middleware('auth')->group(function (){
    
    //Home Routes
    Route::get('/', 'HomeController@index');

    //Users Routes
    Route::resource('users', 'UserController');

    //Customers Routes
    Route::resource('customers', 'CustomerController');
});