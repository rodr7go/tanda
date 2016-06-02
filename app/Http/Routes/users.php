<?php
Route::resource('users', 'UsersController');
Route::get('users/{users}/delete', [ 'as' => 'users.delete', 'uses' => 'UsersController@destroy' ]);
Route::get('users/role/{role}', [ 'as' => 'users.index.role', 'uses' => 'UsersController@index' ]);