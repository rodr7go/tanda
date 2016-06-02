<?php

Route::resource('series', 'SeriesController');
Route::get('series/{series}/delete', [ 'as' => 'series.delete', 'uses' => 'SeriesController@destroy' ]);
Route::get('series/{serie_id}/orders/create', ['as' => 'series.orders.create', 'uses' => 'OrdersController@create' ]);
Route::get('series/{serie_id}/orders', [ 'as' => 'series.orders.index', 'uses' => 'OrdersController@index' ]);
Route::get('series/{serie_id}/orders/{id}/edit', ['as' => 'series.orders.edit', 'uses' => 'OrdersController@edit' ]);
