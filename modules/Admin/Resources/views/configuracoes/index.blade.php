@extends('admin::layouts.default')
    
@section('content')
<div class="col-lg-6 col-xs-12">
    <div class="info-box with-3d-shadow">
        <span class='info-box-icon bg-red-gradient'>
            <i class="fa fa-files-o"></i>
        </span>
        <div class="info-box-content">
            <div class="info-box-text">
                <a href="{{ URL::to('admin/configuracoes/adicionar-pagina') }}" class="text-red">
                    Adicionar Página
                </a>
            </div>
        </div>
    </div>
</div>
    
<div class="col-lg-6 col-xs-12">
    <div class="info-box">
        <span class='info-box-icon bg-light-blue-gradient'>
            <i class="fa fa-file-word-o"></i>
        </span>
        <div class="info-box-content">
            <div class="info-box-text">
                <a href="{{ URL::to('admin/configuracoes/adicionar-conteudo') }}" class="text-blue">
                    Adicionar Conteudos
                </a>
            </div>
        </div>
    </div>
</div>
    
<div class="col-lg-6 col-xs-12">
    <div class="info-box">
        <span class='info-box-icon bg-green-gradient'>
            <i class="fa fa-columns"></i>
        </span>
        <div class="info-box-content">
            <div class="info-box-text">
                <a href="{{ URL::to('admin/configuracoes/layout-pagina') }}" class="text-green">
                    Layout da Página
                </a>
            </div>
        </div>
    </div>
</div>
    
<div class="col-lg-6 col-xs-12">
    <div class="info-box">
        <span class='info-box-icon bg-yellow-gradient'>
            <i class="fa fa-css3"></i>
        </span>
        <div class="info-box-content">
            <div class="info-box-text">
                <a href="{{ URL::to('admin/configuracoes/cores-pagina') }}" class="text-yellow">
                    Cores da Página
                </a>
            </div>
        </div>
    </div>
</div>
    
@stop