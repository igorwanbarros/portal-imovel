<?php

Route::group(
    [
        'prefix'        => '',
        'namespace'     => 'Modules\Publico\Http\Controllers'
    ], function() {
	Route::get('/{search?}', 'PublicoController@index');
	Route::get('/imoveis/{search?}', 'PublicoController@index');
    }
);