<?php

namespace Modules\Admin\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class WebServiceController extends Controller
{

    public function index()
    {
        $cliente    = (new \QueryAuth\Factory)->newClient();
        
        $key        = env('WEBSERVICE_KEY','KEY');
        $secret     = env('WEBSERVICE_SECRET','secret');
        $method     = env('WEBSERVICE_METHOD','METHOD');
        $host       = env('WEBSERVICE_HOST','HOST');
        $path       = env('WEBSERVICE_PATH','PATH');
        
        $params     = ['bairro' => 'mang'];
//        $params     = ['id' => '680'];
        $params     = $cliente->getSignedRequestParams($key, $secret, $method, $host, $path, $params);
        
        $postdata = http_build_query($params);
        $options  = array(
            'http' => array(
                'method'  => $method,
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'content' => $postdata
            )
        );
        
        $context = stream_context_create($options);
        $file    = file_get_contents('http://'.$host.$path, false, $context);

        dd(json_decode($file));
        
        return view('admin::index');
    }

}
