<?php

use Illuminate\Support\Facades\Route;

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
