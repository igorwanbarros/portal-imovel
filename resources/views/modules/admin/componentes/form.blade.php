@extends('admin::layouts.content_default')

@section('box-body')

        {!! Form::open(array('url' => 'admin/configuracoes/componentes/store')) !!}
    <div class="col-lg-6 col-xs-12">
        {!! Form::hidden('id', $componentes->id) !!}
        {!! Form::label('name', 'Nome do Componente') !!}
        {!! Form::text('name', $componentes->name, ['class' => 'form-control']) !!}
    </div>

    <div class="col-lg-6 col-xs-12">
        {!! Form::label('class', 'Classe') !!}
        {!! Form::text('class', $componentes->class, ['class' => 'form-control']) !!}
    </div>

    <div class="col-lg-6 col-xs-12">
        {!! Form::label('description', 'Descrição') !!}
        {!! Form::text('description', $componentes->description, ['class' => 'form-control']) !!}
    </div>
        
    <div class="padding-top-2x col-lg-12 col-xs-12">
        <button class="btn bg-green-gradient" type="submit" name="action">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>

        <a href="{{ URL::to('admin/configuracoes/componentes/cadastrar') }}" title="Cadastrar" class="btn bg-blue-gradient">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>

        @if(isset($componentes))
        <a href="{{ URL::to('admin/configuracoes/componentes/' . $componentes->id . '/destroy') }}" class="btn bg-red-gradient">
            <i class="fa fa-trash-o fa-fw"></i> Remover
        </a>
        @endif
    </div>
        {!! Form::close() !!}
    <div class="col-lg-12 col-xs-12 padding-top-2x text-right">
        <a href="{{ URL::to('admin/configuracoes/componentes') }}" title="Voltar" class="btn bg-blue-gradient">
            <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
        </a>
    </div>
@stop