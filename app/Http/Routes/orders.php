<?php
Route::resource('orders', 'OrdersController');
Route::get('orders/{orders}/delete', [ 'as' => 'orders.delete', 'uses' => 'OrdersController@destroy' ]);