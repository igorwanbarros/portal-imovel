@extends('admin::layouts.content_default')

@section('box-body')

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class='active'>
            <a href='#identificacao' data-toggle="tab" aria-expended="true">Dados da Página</a>
        </li>
        <li>
            <a href='#componentes' data-toggle="tab" aria-expended="true">Componentes</a>
        </li>
    </ul>
    <!--fim do nav-tabs-->
    
    <div class="tab-content">
        <div class="tab-pane active" id="identificacao">
                {!! Form::open(array('url' => 'admin/configuracoes/paginas/store')) !!}
            <div class="col-lg-6 col-xs-12">
                {!! Form::hidden('id', $paginas->id) !!}
                {!! Form::label('name', 'Nome da Página') !!}
                {!! Form::text('name', $paginas->name, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('title', 'Titulo') !!}
                {!! Form::text('title', $paginas->title, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('description', 'Descrição') !!}
                {!! Form::text('description', $paginas->description, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('active', 'Página Ativada') !!}
                {!! Form::select('active', ['0' => 'Sim', '1' => 'Não'], $paginas->active, ['class' => 'form-control']) !!}
            </div>
            
            <div class="padding-top-2x col-lg-12 col-xs-12">
                <button class="btn bg-green-gradient" type="submit" name="action">
                    <i class="fa fa-save fa-fw"></i> Salvar
                </button>

                <a href="{{ URL::to('admin/configuracoes/paginas/cadastrar') }}" title="Cadastrar" class="btn bg-blue-gradient">
                    <i class="fa fa-file-o fa-fw"></i> Cadastrar
                </a>
                
                @if(isset($paginas))
                <a href="{{ URL::to('admin/configuracoes/paginas/' . $paginas->id . '/destroy') }}" class="btn bg-red-gradient">
                    <i class="fa fa-trash-o fa-fw"></i> Remover
                </a>
                @endif
            </div>
                {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
        <!--fim da Identificacao do Imovel-->
        
        
        <div class="tab-pane" id="componentes">
            
            @include('admin::pages.componentes')
            
            <div class="clearfix"></div>
        </div>
        <!--fim da listagem das Imagens-->
        
    </div>
    <!--fim do tab-content-->
</div>
<!--fim da div nav-tabs-custom-->

<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/configuracoes/paginas') }}" title="Voltar" class="btn bg-blue-gradient">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>
@stop