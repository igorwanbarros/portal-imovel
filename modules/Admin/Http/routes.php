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

        //PAGE CONFIGURATION
	Route::group(['prefix' => 'configuracoes'], function()
	{
		Route::get('/', 'PageConfigurationController@index');
		Route::get('/novo', 'PageConfigurationController@create');
		Route::get('/{id}/editar', 'PageConfigurationController@create');
		Route::put('/{id}/update', 'PageConfigurationController@store');
		Route::get('/{id}/remover', 'PageConfigurationController@destroy');
		Route::post('/store', 'PageConfigurationController@store');
	});

	//COMPONENT
	Route::group(['prefix' => 'configuracoes/componente'], function()
	{
		Route::get('/', 'ComponentController@index');
		Route::get('/cadastrar', 'ComponentController@form');
		Route::post('/store', 'ComponentController@store');
		Route::get('/{id}/editar', 'ComponentController@form');
		Route::get('/{id}/destroy', 'ComponentController@destroy');
	});
});
