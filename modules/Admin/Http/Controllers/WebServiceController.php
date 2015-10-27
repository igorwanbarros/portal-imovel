<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Commands\PullWebServiceCommand;

class WebServiceController extends Controller
{

    public function index()
    {
        $this->dispatch(
            new PullWebServiceCommand()
        );
        
        return view('admin::index');
    }

}
