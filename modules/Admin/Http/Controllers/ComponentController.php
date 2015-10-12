<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Component;

class ComponentController extends Controller
{

    public function index()
    {
        $title  = 'Componentes';
        $object = Component::all();
        
        return view('admin::component.index',compact('object','title'));
    }

    public function form(Component $component, $id = null)
    {
        $title  = 'Editar Componente';
        $object = $component->findOrNew($id);
        
        return view('admin::component.form', compact('object','title'));
    }

    public function store(Request $request)
    {
        Component::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/configuracoes/componente');
    }

    public function destroy($id)
    {
        Component::destroy($id);
        
        return redirect()->guest('admin/configuracoes/componente');
    }

}
