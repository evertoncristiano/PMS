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

    Route::middleware('CheckAdmin')->group(function (){
        //Users Routes
        Route::resource('users', 'UserController');

        //Customers Routes
        Route::resource('customers', 'CustomerController');

        //Projects
        Route::resource('projects', 'ProjectController');
        Route::delete('projects/{$projectId}/removeuser/{$userId}', 'ProjectController@removeUser')->name('removeuser');

        //Tasks
        Route::resource('projects/tasks', 'ProjectController');
    });

    Route::resource('tasks', 'TaskController');

    Route::get('/403', function (){ return view('403'); });
});