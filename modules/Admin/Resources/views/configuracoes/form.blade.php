@extends('admin::layouts.content_default')

@section('box-body')
@if (isset($object))
    {!! Form::open(array('url' => 'admin/configuracoes/' . $object['id'] . '/update','method' => 'put')) !!}
@else
    {!! Form::open(array('url' => 'admin/configuracoes/store')) !!}
@endif
{!! Form::open(['url' => 'admin/','method' => 'post']) !!}
<div class="col-lg-6 col-xs-12">
    {!! Form::label('titulo_pagina', 'Titulo da Página') !!}
    {!! Form::text('titulo_pagina', isset($object['titulo_pagina']) ? $object['titulo_pagina'] : null,['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
    {!! Form::label('page_name', 'Endereço da Página') !!}
    {!! Form::text('page_name', isset($object['page_name']) ? $object['page_name'] : null,['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
    {!! Form::label('ativo', 'Página Ativa?') !!}
    {!! Form::select('ativo', ['0' => 'Sim','1' => 'Não'], isset($object['ativo']) ? $object['ativo'] : 0, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
    {!! Form::label('group_menu', 'Agrupar a Página em algum Menu?') !!}
    {!! Form::text('group_menu', isset($object['group_menu']) ? $object['group_menu'] : null,['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
    {!! Form::label('autor', 'Autor') !!}
    {!! Form::text('autor', isset($object['autor']) ? $object['autor'] : null,['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
</div>

<div class="padding-top-2x col-lg-12 col-xs-12">
    <button class="btn btn-default" type="submit" name="action">
        <i class="fa fa-save fa-fw"></i> Salvar
    </button>

    @if(isset($object))
    <a href="{{ URL::to('admin/configuracoes/' . $object['id'] . '/remover') }}" class="btn btn-default">
        <i class="fa fa-trash-o fa-fw"></i> Excluir
    </a>
    @endif
</div>
{!! Form::close() !!}
<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/configuracoes') }}" title="Voltar" class="btn btn-sm btn-warning">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>
@stop