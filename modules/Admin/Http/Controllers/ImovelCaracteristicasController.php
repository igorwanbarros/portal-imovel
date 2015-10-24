<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

use Modules\Admin\Entities\Caracteristica;
use Modules\Admin\Entities\Imovel;
use Modules\Admin\Http\Controllers\ImovelCaracteristicasController;
use Modules\Admin\Entities\ImovelCaracteristica;


class ImovelCaracteristicasController extends Controller
{

    public function index(Imovel $imovel, $imovelId)
    {
        $imovel 			= $imovel->find($imovelId);
		$caracteristica		= Caracteristica::lists('nome','id');
        return view('admin::imoveis-caracteristicas.index', compact('imovel','imovelId','caracteristica'));
    }


    public function store(Request $request, ImovelCaracteristica $imovelCaracteristica)
    {
		$imovelCaracteristica->saveOrUpdate($request->all());
        $imovel 			= Imovel::find($request['imovel_id']);
		$imovelId			= $request['imovel_id'];
		$caracteristica		= Caracteristica::lists('nome','id');

        return view('admin::imoveis-caracteristicas.index',
					compact('imovel','imovelId','caracteristica'));
    }

    public function destroy($id)
    {
        return ['status' => ImovelCaracteristica::destroy($id)];
    }

}
