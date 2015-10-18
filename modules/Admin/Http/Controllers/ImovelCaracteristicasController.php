<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

use Modules\Admin\Entities\Caracteristica;
use Modules\Admin\Entities\Imovel;


class ImovelCaracteristicasController extends Controller
{

    public function index(Imovel $imovel, $imovelId)
    {
        $imovel 			= $imovel->find($imovelId);
		$caracteristica		= Caracteristica::lists('nome','id');
        return view('admin::imoveis-caracteristicas.index', compact('imovel','imovelId','caracteristica'));
    }


    public function store(Request $request)
    {
		
        return redirect()->guest('admin/imoveis/' . $image['imovel_id'] . '/editar');
    }

    public function destroy($id)
    {
        return ['status' => ImovelImagem::destroy($id)];
    }

}
