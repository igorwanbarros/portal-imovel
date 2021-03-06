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
        $text = (env('QUEUE_DRIVE','') == 'sync' ? 'realizada' : 'agendada');
        return redirect()->guest('admin/web-service')->with('message', 'Sincronização ' . $text . ' com sucesso!');
    }

}
