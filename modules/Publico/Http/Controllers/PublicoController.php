<?php

namespace Modules\Publico\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Imovel;
use Modules\Admin\Entities\Caracteristica;

use Illuminate\Http\Request;

class PublicoController extends Controller
{

    public function index(Request $request)
    {
        $pesquisa   = $this->_populateImovelPesquisa($request);
        
        $object     = $this->_whereImovel($pesquisa, $request)
                           ->paginate(10)
                           ->setPath('imoveis');
        
        $caracteristica = new Caracteristica();
        $caracteristicaList = $caracteristica->lists('nome','id');
        
        return view('publico::index', compact('object','pesquisa', 'caracteristicaList'));
    }
    
    public function show(Imovel $imov, $id)
    {
        $imovel = $imov->find($id);
        $title  = $imovel->nome . ' - Visualizar Imovel';
        
        return view('publico::visualizar-imovel', compact('title','imovel'));
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
        
        return $pesquisa;
    }
    
    protected function _whereImovel($imovel, $request)
    {
        if ($request->method() === 'POST') {
            $imovel = $imovel
                        ->leftJoin('imovel_caracteristica','imovel.id', '=', 'imovel_caracteristica.imovel_id')
                           ->where('imovel.nome','LIKE', '%'.$imovel->nome.'%')
                           ->where('imovel.endereco','LIKE', '%'.$imovel->endereco.'%')
                           ->where('imovel.bairro','LIKE', '%'.$imovel->bairro.'%')
                           ->where('imovel.cidade','LIKE', '%'.$imovel->cidade.'%')
                           ->where('imovel.valor','>=', $imovel->valor != '' ? $imovel->valor : 0)
                           ->where('imovel.quartos','>=', $imovel->quartos != '' ? $imovel->quartos : 0)
                           ->where('imovel.vagas','>=', $imovel->vagas != '' ? $imovel->vagas : 0)
                           ->where('caracteristica_id','=',$request['caracteristica'])
                        ;
        }
        
        return $imovel;
    }

}
