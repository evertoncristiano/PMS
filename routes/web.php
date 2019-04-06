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
    Route::prefix('/users')->group(function () {
        Route::get('/', 'UserController@index');
        Route::post('/', 'UserController@store');
        Route::get('/create', 'UserController@create');
        Route::get('/show/{id}', 'UserController@show');
        Route::get('/{id}/edit', 'UserController@edit');
        Route::put('/', 'UserController@update');
        Route::delete('/{id}', 'UserController@delete');
    });

    //Customers Routes
    Route::prefix('/customers')->group(function () {
        Route::get('/', 'CustomerController@index');
        Route::post('/', 'CustomerController@store');
        Route::get('/create', 'CustomerController@create');
        Route::get('/show/{id}', 'CustomerController@show');
        Route::get('/{id}/edit', 'CustomerController@edit');
        Route::put('/', 'CustomerController@update');
        Route::delete('/{id}', 'CustomerController@delete');
    });
});