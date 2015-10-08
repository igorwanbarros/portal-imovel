<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/index', 'AdminController@index');
        
        //IMOVEIS
	Route::get('/imoveis', 'ImoveisController@index');
	Route::get('/imoveis/cadastrar', 'ImoveisController@create');
	Route::post('/imoveis/store', 'ImoveisController@store');
	Route::get('/imoveis/{id}/editar', 'ImoveisController@edit');
	Route::put('/imoveis/{id}/update', 'ImoveisController@update');
	Route::get('/imoveis/{id}/destroy', 'ImoveisController@destroy');
        //IMOVEIS IMAGEM
	Route::post('/imoveis-imagem/store', 'ImovelImagemController@store');
	Route::get('/imoveis-imagem/{id}/destroy', 'ImovelImagemController@destroy');
        
        //PAGE CONFIGURATION
	Route::get('/configuracoes/', 'PageConfigurationController@index');
	Route::get('/configuracoes/novo', 'PageConfigurationController@create');
	Route::get('/configuracoes/{id}/editar', 'PageConfigurationController@create');
	Route::put('/configuracoes/{id}/update', 'PageConfigurationController@store');
	Route::get('/configuracoes/{id}/remover', 'PageConfigurationController@destroy');
	Route::post('/configuracoes/store', 'PageConfigurationController@store');
});