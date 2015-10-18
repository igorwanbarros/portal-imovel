<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Imovel;
use App\Http\Controllers\Controller;
use Modules\Admin\Entities\Caracteristica;

class ImoveisController extends Controller
{
    protected $title;

    public function __construct()
    {
        $this->title = 'Imoveis';
    }

    public function index(Imovel $imovel)
    {
        $title      = $this->title;
        $imoveis    = $imovel->paginate(10)->setPath('imoveis');

        return view('admin::imoveis.index', compact('title','imoveis'));
    }

    public function form(Imovel $imovel, $id = null)
    {
        $title = $this->title . ($id > 0 ? ' - Editar' : ' - Cadastrar');
        $object = $imovel->findOrNew($id);


        return view('admin::imoveis.form', compact('object', 'title'));
    }

    public function store(Request $request)
    {
        Imovel::saveOrUpdate($request->all());

        return redirect()->guest('admin/imoveis');
    }

    public function destroy($id)
    {
        Imovel::destroy($id);

        return redirect()->guest('admin/imoveis');
    }
}
