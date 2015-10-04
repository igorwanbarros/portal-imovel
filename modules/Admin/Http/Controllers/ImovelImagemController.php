<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;

use Modules\Admin\Entities\ImovelImagem;
use Illuminate\Support\Facades\Input;


class ImovelImagemController extends Controller
{

    public function index()
    {
        return view('admin::index');
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

            return redirect()->guest('admin/imoveis/' . $image['imovel_id'] . '/editar');
        }
        
        return redirect()->guest('admin/imoveis/' . $image['imovel_id'] . '/editar');
    }
    
    public function destroy($id)
    {
        $imagem = ImovelImagem::find($id);
        $imagem->update(['excluido' => 1]);
        
        return redirect()->guest('admin/imoveis/' . $imagem->imovel_id . '/editar');
    }

}
