<?php

namespace Modules\Publico\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Imovel;

use Illuminate\Http\Request;

class PublicoController extends Controller
{

    public function index(Request $request)
    {
        $pesquisa   = $this->_populateImovelPesquisa($request);
        
        $object     = $this->_whereImovel($pesquisa, $request)
                           ->paginate(10)
                           ->setPath('imoveis');
        
//        $auth = \Illuminate\Support\Facades\Auth::check();
//        dd($auth);
        
        return view('publico::index', compact('object','pesquisa'));
    }
    
    protected function _populateImovelPesquisa($request)
    {
        $pesquisa = new Imovel();
        
        $pesquisa->setAttribute('nome', $request['nome']);
        $pesquisa->setAttribute('endereco', $request['endereco']);
        $pesquisa->setAttribute('valor', $request['valor']);
        $pesquisa->setAttribute('quartos', $request['quartos']);
        $pesquisa->setAttribute('vagas', $request['vagas']);
        $pesquisa->setAttribute('bairro', $request['bairro']);
        $pesquisa->setAttribute('cidade', $request['cidade']);
        $pesquisa->setAttribute('caracteristica', $request['caracteristica']);
        
        return $pesquisa;
    }
    
    protected function _whereImovel($imovel, $request)
    {
        if ($request->method() === 'POST') {
            $imovel = $imovel->where('nome','LIKE', '%'.$imovel->nome.'%')
                           ->where('endereco','LIKE', '%'.$imovel->endereco.'%')
                           ->where('bairro','LIKE', '%'.$imovel->bairro.'%')
                           ->where('cidade','LIKE', '%'.$imovel->cidade.'%')
                           ->where('valor','>=', $imovel->valor != '' ? $imovel->valor : 0)
                           ->where('quartos','>=', $imovel->quartos != '' ? $imovel->quartos : 0)
                           ->where('vagas','>=', $imovel->vagas != '' ? $imovel->vagas : 0)
                        ;
        }
        
        return $imovel;
    }

}
