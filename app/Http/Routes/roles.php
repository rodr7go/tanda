<?php
Route::resource('roles', 'RolesController');
Route::get('roles/{roles}/delete', [ 'as' => 'roles.delete', 'uses' => 'RolesController@destroy' ]);