<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Laravel 8 Controller namespace register in RouteServiceProvider
|--------------------------------------------------------------------------
|
|First of all we have to set our controller namespace in RouteServiceprovide
| As a global call then we can easilly witre our controller name in route file
|without use namespace of controller
|
*/
Route::get('/', 'PracticeController@index');


/*
|--------------------------------------------------------------------------
|  EXTRA ROUTE METHOD IN RESOURCE CONTROLLER
|--------------------------------------------------------------------------
|wHEN wE NEED EXTRA ROUTE METHOD IN RESOURCE CONTROLLER WE
|SHOULD WRITE EXTRS ROUTE ABOVE OF MAIN RESOURCE ROUTE
|
*/

Route::get('/user/export' , 'AuthController@export');
Route::resource('/user', 'AuthController');



/*
|--------------------------------------------------------------------------
|  ROUTE NESTED
|--------------------------------------------------------------------------
|ALL SIMILLER ROUTE SHOULD BE IN GROUP ROUTE YOU CAN ADD MORE
|GROUP IN MAIN GROUP USING NESTED ROUTE
|
*/


Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'user' , 'as' => 'user.', 'namespace' => 'Auth/'], function() {
        Route::get('/export' , 'AuthController@export');
        Route::resource('/', 'AuthController');
    });

    Route::group(['prefix' => 'admin' , 'as' => 'admin.', 'namespace' => 'Admin/'], function() {
        Route::get('/export' , 'AdminController@export');
        Route::resource('/', 'AdminController');
    });

});
