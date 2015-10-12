<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/index', 'AdminController@index');

	//IMOVEIS
	Route::group(['prefix' => 'imoveis'], function()
	{
		Route::get('/', 'ImoveisController@index');
		Route::get('/cadastrar', 'ImoveisController@form');
		Route::post('/store', 'ImoveisController@store');
		Route::get('/{id}/editar', 'ImoveisController@edit');
		Route::get('/{id}/destroy', 'ImoveisController@destroy');
	});

        //IMOVEIS IMAGEM
	Route::group(['prefix' => 'imoveis-imagem'], function()
	{
		Route::post('/store', 'ImovelImagemController@store');
		Route::get('/{id}/destroy', 'ImovelImagemController@destroy');
	});
});
