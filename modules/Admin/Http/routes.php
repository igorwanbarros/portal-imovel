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
            Route::get('/{id}/editar', 'ImoveisController@form');
            Route::get('/{id}/destroy', 'ImoveisController@destroy');
	});

        //IMOVEIS IMAGEM
	Route::group(['prefix' => 'imoveis-imagem'], function()
	{
            Route::post('/store', 'ImovelImagemController@store');
            Route::get('/{id}/destroy', 'ImovelImagemController@destroy');
	});

	//CONFIGURACOES
	Route::group(['prefix' => 'configuracoes'], function()
	{
            //PAGINAS
            Route::group(['prefix' => 'paginas'], function()
            {
                Route::get('/', 'PagesController@index');
                Route::get('/cadastrar', 'PagesController@form');
                Route::post('/store', 'PagesController@store');
                Route::get('/{id}/editar', 'PagesController@form');
                Route::get('/{id}/destroy', 'PagesController@destroy');
            });
	});
});
