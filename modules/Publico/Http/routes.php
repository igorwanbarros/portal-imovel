<?php

Route::group(
    [
        'prefix'        => '/',
        'namespace'     => 'Modules\Publico\Http\Controllers'
    ], function() {
	Route::get('/{imoveis?}', 'PublicoController@index');
	Route::post('/pesquisar', 'PublicoController@index');
	Route::get('/imoveis/{id}/visualizar', 'PublicoController@show');
    }
);