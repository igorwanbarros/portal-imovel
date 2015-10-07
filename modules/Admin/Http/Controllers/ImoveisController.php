<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Imovel;
use App\Http\Controllers\Controller;

class ImoveisController extends Controller
{
    protected $title;
    
    public function __construct()
    {
        $this->title = 'Imoveis';
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = $this->title;
        
        $objeto = Imovel::where('excluido', '=', 0)->with('image')->get();
        
        return view('admin::imoveis.index', compact('title','objeto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = $this->title . ' - Cadastrar';
        
        return view('admin::imoveis.form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Imovel::create($request->all());
        
        return redirect()->guest('admin/imoveis');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title  = $this->title . ' - Editar';
        $object = Imovel::with('image')->find($id);
        
        return view('admin::imoveis.form', compact('title', 'object'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Imovel::find($id)->update($request->all());
        
        return redirect()->guest('admin/imoveis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imovel::find($id)->update(['excluido' => 1]);
        
        return redirect()->guest('admin/imoveis');
    }
}
