@extends('admin::layouts.content_default')
    
@section('box-body')
<div class="table-responsive">
    
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/configuracoes/novo') }}" title="Cadastrar" class="btn btn-sm btn-warning">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Titulo</th>
                <th class="text-center">Autor</th>
                <th class="text-center">Nome da Página</th>
                <th class="text-center">Menu</th>
                <th class="text-center">Ativo</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($object as $page)
            <tr class="clickable-row text-center" data-url="{{ URL::to('admin/configuracoes/'.$page->id.'/editar') }}">
                <td>{{ $page->titulo_pagina }}</td>
                <td>{{ $page->autor }}</td>
                <td>{{ $page->page_name }}</td>
                <td>{{ $page->group_menu }}</td>
                <td>{{ $page->ativo == 1 ? 'Não' : 'Sim' }}</td>
                <td>
                    <a href="{{ URL::to('admin/configuracoes/'.$page->id.'/editar') }}" class="btn btn-success btn-sm" title="Editar">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/configuracoes/'.$page->id.'/remover') }}" class="btn bg-red btn-sm" title="Remover">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!--<div class="col-lg-6 col-xs-12">
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
</div>-->
    
@stop