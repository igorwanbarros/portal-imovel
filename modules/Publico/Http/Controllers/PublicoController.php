<?php

namespace Modules\Publico\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Imovel;

use Illuminate\Http\Request;

class PublicoController extends Controller
{

    public function index(Request $search = null)
    {
        $pesquisa = $search['search'];
        
        $object     = Imovel::where('nome', 'LIKE', '%'.$pesquisa.'%')
                        ->orWhere('endereco', 'LIKE', '%'.$pesquisa.'%')
                        ->orWhere('cidade', 'LIKE', '%'.$pesquisa.'%')
                        ->orWhere('bairro', 'LIKE', '%'.$pesquisa.'%')
                        ->orWhere('responsavel', 'LIKE', '%'.$pesquisa.'%')
                        ->paginate(10)->setPath('imoveis');
        
        return view('publico::index', compact('object','pesquisa'));
    }

}
