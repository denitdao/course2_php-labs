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

Route::get('/', function () {
    return view('welcome', ['slogan'=>'My site']);
});

// Route::get( 'route' ,  'ControllerName@FunctionName' );
Route::get( '/sign-in', 'UserController@show');// get without parameter

Route::post( '/sign-in', 'UserController@check');

Route::get( '/message/{name?}', 'MessageController@show');// get with parameter

Route::get( '/product/{number?}', 'ProductController@show');// get with parameter
