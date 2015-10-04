<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
	Route::get('/', 'AdminController@index');
        
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
});