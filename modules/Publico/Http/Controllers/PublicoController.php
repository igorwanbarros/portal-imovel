<?php

namespace Modules\Publico\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Admin\Entities\Imovel;

class PublicoController extends Controller
{

    public function index()
    {
        $object     = Imovel::all();
        
        return view('publico::index', compact('object'));
    }

}
