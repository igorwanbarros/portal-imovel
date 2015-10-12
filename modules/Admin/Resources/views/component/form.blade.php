@extends('admin::layouts.content_default')

@section('box-body')

        {!! Form::open(array('url' => 'admin/configuracoes/componente/store')) !!}
    <div class="col-lg-6 col-xs-12">
        {!! Form::hidden('id', $object->id) !!}
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', $object->name, ['class' => 'form-control']) !!}
    </div>
        
    <div class="col-lg-6 col-xs-12">
        {!! Form::label('class_name', 'Class Nome') !!}
        {!! Form::text('class_name', $object->class_name, ['class' => 'form-control']) !!}
    </div>
        
    <div class="padding-top-2x col-lg-12 col-xs-12">
        <button class="btn btn-default" type="submit" name="action">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>

        @if(isset($object->id))
        <a href="{{ URL::to('admin/configuracoes/componente/' . $object['id'] . '/destroy') }}" class="btn btn-default">
            <i class="fa fa-trash-o fa-fw"></i> Excluir
        </a>
        @endif
    </div>
        
<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/configuracoes/componente') }}" title="Voltar" class="btn btn-sm btn-warning">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>
@stop