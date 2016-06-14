<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::group(['middleware' => 'auth'], function (){
    Route::get('/', function () {

        if (\Entrust::hasRole(['admin']))
            return redirect()->route('series.index');

        return redirect()->route('series.users.index');
    });

    require_once app_path('Http/Routes/users.php');
    require_once app_path('Http/Routes/orders.php');
    require_once app_path('Http/Routes/roles.php');
    require_once app_path('Http/Routes/series.php');

    Route::get('prueba', function () {
         dd(\App\Serie::first()->orders);
    });

});