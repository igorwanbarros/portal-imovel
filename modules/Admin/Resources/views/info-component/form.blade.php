@extends('admin::layouts.content_default')

@section('box-body')

        {!! Form::open(array('url' => 'admin/configuracoes/componente/info/store')) !!}
    <div class="col-lg-6 col-xs-12">
        {!! Form::hidden('id', $object->id) !!}
        {!! Form::label('content', 'Conteudo') !!}
        {!! Form::text('content', $object->content, ['class' => 'form-control']) !!}
    </div>
        
    <div class="col-lg-6 col-xs-12">
        {!! Form::label('component_id', 'Componente') !!}
        {!! Form::select('component_id', $components, $object->component_id, ['class' => 'form-control']) !!}
    </div>
        
    <div class="padding-top-2x col-lg-12 col-xs-12">
        <button class="btn btn-default" type="submit" name="action">
            <i class="fa fa-save fa-fw"></i> Salvar
        </button>

        @if(isset($object->id))
        <a href="{{ URL::to('admin/configuracoes/componente/info/' . $object['id'] . '/destroy') }}" class="btn btn-default">
            <i class="fa fa-trash-o fa-fw"></i> Excluir
        </a>
        @endif
    </div>
        
<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/configuracoes/componente/info') }}" title="Voltar" class="btn btn-sm btn-warning">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>
@stop