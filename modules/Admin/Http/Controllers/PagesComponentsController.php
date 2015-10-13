<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\PagesComponent;
use App\Http\Controllers\Controller;

class PagesComponentsController extends Controller
{
    protected $title;
    
    public function __construct()
    {
        $this->title = 'Componentes da Página';
    }
    
    public function store(Request $request)
    {
        PagesComponent::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/configuracoes/paginas/' . $request->page_id . '/editar');
    }

    public function destroy($id)
    {
        $pageComponent = PagesComponent::find($id);
        PagesComponent::destroy($id);
        
        return redirect()->guest('admin/configuracoes/paginas/' . $pageComponent->page_id . '/editar');
    }
}
