<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Commands\PullWebServiceCommand;

class WebServiceController extends Controller
{
    
    public function index()
    {
        $job = (new PullWebServiceCommand())
                ->onQueue('webService')
                ->delay(54000)
                ;
        
        $this->dispatch($job);
        
        return view('admin::index');
    }

}
