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
|wHEN wE NEED EXTRA ROUTE METHOD IN RESOURCE CONTROLLER WE
|SHOULD WRITE EXTRS ROUTE ABOVE OF MAIN RESOURCE ROUTE
|
*/