@extends('admin::layouts.content_default')

@section('box-body')

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class='active'>
            <a href='#identificacao' data-toggle="tab" aria-expended="true">Identificação</a>
        </li>
        <li>
            <a href='#imagens' data-toggle="tab" aria-expended="true">Imagens</a>
        </li>
    </ul>
    <!--fim do nav-tabs-->
    
    <div class="tab-content">
        <div class="tab-pane active" id="identificacao">
            @if (isset($object))
                {!! Form::open(array('url' => 'admin/imoveis/' . $object['id'] . '/update','method' => 'put')) !!}
            @else
                {!! Form::open(array('url' => 'admin/imoveis/store')) !!}
            @endif
            <div class="col-lg-6 col-xs-12">
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', isset($object['nome']) ? $object['nome'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco', isset($object['endereco']) ? $object['endereco'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('bairro', 'Bairro') !!}
                {!! Form::text('bairro', isset($object['bairro']) ? $object['bairro'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('cidade', 'Cidade') !!}
                {!! Form::text('cidade', isset($object['cidade']) ? $object['cidade'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('cep', 'Cep') !!}
                {!! Form::text('cep', isset($object['cep']) ? $object['cep'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('numero', 'Numero') !!}
                {!! Form::text('numero', isset($object['numero']) ? $object['numero'] : null, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('responsavel', 'Responsavel') !!}
                {!! Form::text('responsavel', isset($object['responsavel']) ? $object['responsavel'] : null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="padding-top-2x col-lg-12 col-xs-12">
                <button class="btn btn-default" type="submit" name="action">
                    <i class="fa fa-save fa-fw"></i> Salvar
                </button>

                @if(isset($object))
                <a href="{{ URL::to('admin/imoveis/' . $object['id'] . '/destroy') }}" class="btn btn-default">
                    <i class="fa fa-trash-o fa-fw"></i> Excluir
                </a>
                @endif
            </div>
                {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
        <!--fim da Identificacao do Imovel-->
        
        
        <div class="tab-pane" id="imagens">
            @if(isset($object))
                {!! Form::open(array('url' => 'admin/imoveis-imagem/store','method' => 'post', 'files' => true)) !!}
                <div class="col-lg-6 col-xs-6">
                    {!! Form::label('image', 'Selecione uma Imagem') !!}
                    {!! Form::file('image') !!}
                    {!! Form::hidden('imovel_id',$object['id']) !!}
                </div>

                <div class="col-lg-6 col-xs-6">
                    {!! Form::label('descricao', 'Descrição da Imagem') !!}
                    {!! Form::text('descricao', isset($object['image']['descricao']) ? $object['image']['descricao'] : null, ['class' => 'form-control']) !!}
                    {!! Form::hidden('imovel_id', $object['id']) !!}
                </div>

                <div class="col-lg-12 col-xs-12 padding-top-2x">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> Adicionar
                    </button>
                </div>
                {!! Form::close() !!}
                <div class="clearfix"></div>

                <div class=" padding-top-3x">
                    @foreach($object['image'] as $imagem)
                    <div class="col-lg-3 col-xs-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <h3 class="box-title">
                                    <i class="fa fa-file-image-o fa-fw"></i> 
                                    {{ $imagem->descricao }}
                                </h3>
                            </div>
                            <div class="box-body">
                                <img class="img-rounded img-responsive"
                                     alt="{{ $imagem->descricao }}" 
                                     src="{{ URL::to($imagem->url . $imagem->name) }}"/>
                            </div>
                            <div class="box-footer text-right">
                                <a href="{{ URL::to('admin/imoveis-imagem/' . $imagem->id . '/destroy') }}"
                                   class="btn bg-red btn-sm">
                                    <i class="fa fa-trash-o fa-fw"></i> Remover
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
            <div class="clearfix"></div>
        </div>
        <!--fim da listagem das Imagens-->
        
    </div>
    <!--fim do tab-content-->
</div>
<!--fim da div nav-tabs-custom-->
@if (isset($message))
{{ $message}}
@endif
<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/imoveis') }}" title="Voltar" class="btn btn-sm btn-warning">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>
@stop