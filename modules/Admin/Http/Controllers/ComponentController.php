<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Component;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    protected $title;
    
    public function __construct()
    {
        $this->title = 'Componentes';
    }
    
    public function index(Component $component)
    {
        $title          = $this->title;
        $componentes    = $component->paginate(10)->setPath('componentes');
        
        return view('admin::componentes.index', compact('title','componentes'));
    }

    public function form(Component $component, $id = null)
    {
        $title          = $this->title . ($id > 0 ? ' - Editar' : ' - Cadastrar');
        $componentes    = $component->findOrNew($id);
        
        return view('admin::componentes.form', compact('componentes', 'title'));
    }

    public function store(Request $request)
    {
        Component::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/configuracoes/componentes');
    }

    public function destroy($id)
    {
        Component::destroy($id);
        
        return redirect()->guest('admin/configuracoes/componentes');
    }

}
