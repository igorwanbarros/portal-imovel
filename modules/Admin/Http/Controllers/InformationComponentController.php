<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\InformationComponent;
use Modules\Admin\Entities\Component;
use Illuminate\Http\Request;

class InformationComponentController extends Controller
{

    public function index()
    {
        $title  = 'Informações do Componente';
        $information = new InformationComponent();
        $object = $information->get();
        
        return view('admin::info-component.index', compact('title','object'));
    }

    public function form(InformationComponent $information, $id = null)
    {
        $object     = $information->findOrNew($id);
        $components = Component::lists('name','id');
        $title      = 'Informações do Componente';
        
        return view('admin::info-component.form', compact('title','object', 'components'));
    }

    public function store(Request $request)
    {
        InformationComponent::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/configuracoes/componente/info/');
    }

    public function destroy($id)
    {
        InformationComponent::destroy($id);
        
        return redirect()->guest('admin/configuracoes/componente/info/');
    }

}
