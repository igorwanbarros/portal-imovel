<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use App\Commands\PullWebServiceCommand;

class WebServiceController extends Controller
{
    
    public function index()
    {
        $title = 'Web Service';
        
        return view('admin::web-service.index', compact('title'));
    }
    
    
    public function syncronizeWebService()
    {
        $job = (new PullWebServiceCommand())
                ->onQueue('webService')
                ->delay(54000)
                ;
        
        $this->dispatch($job);
        
        return redirect()->guest('admin/web-service')->with('message', 'Sincronização realizada com sucesso!');
    }

}
