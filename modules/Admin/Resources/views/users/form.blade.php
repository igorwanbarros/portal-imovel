@extends('admin::layouts.content_default')

@section('box-body')

        {!! Form::open(array('url' => '/auth/register')) !!}
    <div class="col-lg-6 col-xs-12">
        {!! Form::hidden('id', $object->id) !!}
        {!! Form::label('name', 'Nome do Componente') !!}
        {!! Form::text('name', $object->name, ['class' => 'form-control']) !!}
    </div>
        
    <div class="col-lg-6 col-xs-12">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', $object->email, ['class' => 'form-control']) !!}
    </div>
        
    <div class="col-lg-6 col-xs-12">
        {!! Form::label('password', 'Senha') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
        
    <div class="col-lg-6 col-xs-12">
        {!! Form::label('password_confirmation', 'Confirmar Senha') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="padding-top-2x col-lg-12 col-xs-12">
        <button class="btn bg-red" type="submit" name="action">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>

        <a href="{{ URL::to('admin/usuarios/cadastrar') }}" title="Cadastrar" class="btn btn-default">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>

        @if(isset($object))
        <a href="{{ URL::to('admin/usuarios/' . $object->id . '/destroy') }}" class="btn btn-default">
            <i class="fa fa-trash-o fa-fw"></i> Remover
        </a>
        @endif
    </div>
        {!! Form::close() !!}
    <div class="col-lg-12 col-xs-12 padding-top-2x text-right">
        <a href="{{ URL::to('admin/usuarios') }}" title="Voltar" class="btn bg-red">
            <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
        </a>
    </div>
@stop