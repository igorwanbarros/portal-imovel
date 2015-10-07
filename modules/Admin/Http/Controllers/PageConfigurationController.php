<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class PageConfigurationController extends Controller
{

    public function index()
    {
        return view('admin::configuracoes.index');
    }
    
    
    public function addPage()
    {
        return view('admin::configuracoes.add-page');
    }

}
