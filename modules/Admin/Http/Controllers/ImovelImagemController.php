<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

use Modules\Admin\Entities\ImovelImagem;
use Illuminate\Support\Facades\Input;
use Modules\Admin\Entities\Imovel;


class ImovelImagemController extends Controller
{

    public function index(Imovel $imovel, $imovelId)
    {
        $object = $imovel->find($imovelId)->image;
        return view('admin::imoveis-imagem.index', compact('object','imovelId'));
    }


    public function store(Request $request)
    {
        $image = $request->all();
        if (isset($image['image'])) {
            $file            = Input::file('image');

            $image['name']   = $image['imovel_id'] . '_' . time() . '.'
                                . $file->getClientOriginalExtension();

            $image['url']    = 'upload/images/';

            $file->move(public_path() . '/' . $image['url'], $image['name']);

            ImovelImagem::create($image);

            $imovelId 	= $image['imovel_id'];
            $object 	= Imovel::find($imovelId)->image;

            return redirect()->guest('admin/imoveis/' . $image['imovel_id'] . '/editar');
        }

        return redirect()->guest('admin/imoveis-imagem/index/' . $image['imovel_id']);
    }

    public function destroy($id)
    {
        return ['status' => ImovelImagem::destroy($id)];
    }

}
