<?php

Route::group(['prefix' => 'publico', 'namespace' => 'Modules\Publico\Http\Controllers'], function()
{
	Route::get('/', 'PublicoController@index');
});