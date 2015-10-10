<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Imovel;
use App\Http\Controllers\Controller;

class ImoveisController extends Controller
{
    protected $title;
    
    public function __construct()
    {
        $this->title = 'Imoveis';
    }
    
    public function index()
    {
        $title = $this->title;
        
        $objeto = Imovel::with('image')->get();
        
        return view('admin::imoveis.index', compact('title','objeto'));
    }

    public function form(Imovel $imovel)
    {
        $title = $this->title . ' - Cadastrar';
        $object = $imovel;
        
        return view('admin::imoveis.form', compact('object', 'title'));
    }

    public function store(Request $request)
    {
        Imovel::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/imoveis');
    }

    public function edit($id, Imovel $imovel)
    {
        $title  = $this->title . ' - Editar';
        $object = $imovel->find($id);
        
        return view('admin::imoveis.form', compact('title', 'object'));
    }

    public function destroy($id)
    {
        Imovel::destroy($id);
        
        return redirect()->guest('admin/imoveis');
    }
}
