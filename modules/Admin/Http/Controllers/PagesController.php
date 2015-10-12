<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Pages;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    protected $title;
    
    public function __construct()
    {
        $this->title = 'Páginas';
    }
    
    public function index(Pages $page)
    {
        $title      = $this->title;
        $paginas    = $page->paginate(10)->setPath('pages');
        
        return view('admin::pages.index', compact('title','paginas'));
    }

    public function form(Pages $page, $id = null)
    {
        $title      = $this->title . ($id > 0 ? ' - Editar' : ' - Cadastrar');
        $paginas    = $page->findOrNew($id);
//        $componentes= 
        
        return view('admin::pages.form', compact('paginas', 'title'));
    }

    public function store(Request $request)
    {
        Pages::saveOrUpdate($request->all());
        
        return redirect()->guest('admin/configuracoes/paginas');
    }

    public function destroy($id)
    {
        Pages::destroy($id);
        
        return redirect()->guest('admin/configuracoes/paginas');
    }
}
