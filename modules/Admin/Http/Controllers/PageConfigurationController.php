<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Illuminate\Http\Request;
use Modules\Admin\Entities\PageConfiguration;
use Carbon\Carbon;

class PageConfigurationController extends Controller
{

    public function index()
    {
        $object = PageConfiguration::all();
//        $object = PageConfiguration::onlyTrashed()->get();
        $title  = 'Configurar Páginas';
        
        return view('admin::configuracoes.index', compact('object','title'));
    }
    
    
    public function create($id = null)
    {
        $object = PageConfiguration::find($id);
        $title  = $id > 0 ? 'Editar Pagina' : 'Nova Página';
        
        return view('admin::configuracoes.form', compact('object','title'));
    }
    
    public function store(Request $request, $id = null)
    {
        if ($id) {
            PageConfiguration::find($id)->update($request->all());
        } else {
            PageConfiguration::create($request->all());
        }
        
        return redirect()->guest('admin/configuracoes');
    }

    public function destroy($id)
    {
        PageConfiguration::destroy($id);
        
        return redirect()->guest('admin/configuracoes');
    }

}
