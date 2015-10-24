<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

use Modules\Admin\Entities\Caracteristica;


class CaracteristicasController extends Controller
{

    public function index(Caracteristica $caracteristica)
    {

    }


    public function store(Request $request, Caracteristica $caracteristica)
    {
		$caracteristica->saveOrUpdate($request->all());

		return [
			'status' 	=> true,
			'render' 	=> $caracteristica->lists('nome','id')
		];
    }

    public function form(Caracteristica $caracteristica, $id = null)
    {
		$title 	= 'Caracteristica';
		$object = $caracteristica->findOrNew($id);

        return view('admin::caracteristicas.form', compact('title','object'));
    }

    public function destroy(Caracteristica $caracteristica, $id)
    {
        return ['status' => $caracteristica->destroy($id)];
    }

}
