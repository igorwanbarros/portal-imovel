<?php

Route::group([
        'prefix'        => 'admin', 
        'middleware'    => 'auth',
        'namespace'     => 'Modules\Admin\Http\Controllers'
    ], function() {
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
            Route::get('/index/{imovelId}', 'ImovelImagemController@index');
            Route::post('/store', 'ImovelImagemController@store');
            Route::get('/{id}/destroy', 'ImovelImagemController@destroy');
	});

	//IMOVEIS CARACTERISTICA
	Route::group(['prefix' => 'imoveis-caracteristicas'], function()
	{
            Route::get('/index/{imovelId}', 'ImovelCaracteristicasController@index');
            Route::post('/store', 'ImovelCaracteristicasController@store');
            Route::get('/{id}/destroy', 'ImovelCaracteristicasController@destroy');
	});

	//CARACTERISTICA
	Route::group(['prefix' => 'caracteristicas'], function()
	{
            Route::get('/index', 'CaracteristicasController@index');
            Route::get('/form/{id?}', 'CaracteristicasController@form');
            Route::post('/store', 'CaracteristicasController@store');
            Route::get('/{id}/destroy', 'CaracteristicasController@destroy');
	});
        
	//WEB SERVICE
	Route::group(['prefix' => 'web-service'], function()
	{
            Route::get('/', 'WebServiceController@index');
            Route::get('/sincronizar', 'WebServiceController@syncronizeWebService');
	});
        

	//USUARIOS
	Route::group(['prefix' => 'usuarios'], function()
	{
            Route::get('/', 'UsersController@index');
            Route::get('/cadastrar', 'UsersController@form');
            Route::post('/store', 'UsersController@store');
            Route::get('/{id}/editar', 'UsersController@form');
            Route::get('/{id}/destroy', 'UsersController@destroy');
	});

	//CONFIGURACOES
	Route::group(['prefix' => 'configuracoes'], function()
	{
            //COMPONENTES
            Route::group(['prefix' => 'componentes'], function()
            {
                Route::get('/', 'ComponentController@index');
                Route::get('/cadastrar', 'ComponentController@form');
                Route::post('/store', 'ComponentController@store');
                Route::get('/{id}/editar', 'ComponentController@form');
                Route::get('/{id}/destroy', 'ComponentController@destroy');
            });

            //PAGINAS
            Route::group(['prefix' => 'paginas'], function()
            {
                Route::get('/', 'PagesController@index');
                Route::get('/cadastrar', 'PagesController@form');
                Route::post('/store', 'PagesController@store');
                Route::get('/{id}/editar', 'PagesController@form');
                Route::get('/{id}/destroy', 'PagesController@destroy');
            });

            //PAGINAS COMPONENTES
            Route::group(['prefix' => 'paginas-componentes'], function()
            {
                Route::post('/store', 'PagesComponentsController@store');
                Route::get('/{id}/destroy', 'PagesComponentsController@destroy');
            });
	});
});
