@extends('publico::layouts.default')

@section('content')
    <?php 
        $row = 1;
    ?>
    
<div class="col-lg-3 col-xs-12">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">
                <i class="fa fa-search"></i> Pesquisar
            </h3>
        </div>
        
        <div class="box-body">
            {!! Form::open(['url' => '/pesquisar','method' => 'post']) !!}
                {!! 
                    Form::label('nome', 'Nome do Imovel') 
                !!}
                {!! 
                    Form::text('nome', 
                                $pesquisa->nome, 
                                [
                                    'placeholder' => 'Nome do Imóvel', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('valor', 'Valor do Imovel') 
                !!}
                {!! 
                    Form::number('valor', 
                                $pesquisa->valor, 
                                [
                                    'placeholder' => 'Valor', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('quartos', 'Quartos do Imovel') 
                !!}
                {!! 
                    Form::number('quartos', 
                                $pesquisa->quartos, 
                                [
                                    'placeholder' => 'Quartos', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('vagas', 'Vagas do Imovel') 
                !!}
                {!! 
                    Form::number('vagas', 
                                $pesquisa->vagas, 
                                [
                                    'placeholder' => 'Vagas', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('endereco', 'Endereço do Imovel') 
                !!}
                {!! 
                    Form::text('endereco', 
                                $pesquisa->endereco, 
                                [
                                    'placeholder' => 'Rua: ', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('bairro', 'Bairro do Imóvel') 
                !!}
                {!! 
                    Form::text('bairro', 
                                $pesquisa->bairro, 
                                [
                                    'placeholder' => 'Bairro', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('cidade', 'Cidade do Imóvel') 
                !!}
                {!! 
                    Form::text('cidade', 
                                $pesquisa->cidade, 
                                [
                                    'placeholder' => 'Cidade', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('caracteristica', 'Caracteristica do Imovel') 
                !!}
                {!! 
                    Form::select('caracteristica', 
                        $caracteristicaList,
                        $pesquisa->caracteristica, 
                        [
                            'class' => 'form-control'
                        ]
                    ) 
                !!}
                <br />
                <div class="col-lg-12 col-xs-12 text-right">
                    <button type="submit" class="btn bg-red">
                        <i class="fa fa-search"></i> Pesquisar
                    </button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="col-lg-9 col-xs-12">
    @forelse($object as $imovel)
        @include('publico::imovel-show',['renderCaracteristica' => false])
    @empty
    <div class="col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2">
        <div class="box box-widget">
            <div class="box-body text-center">
                <i class="fa fa-thumbs-o-down fa-fw"></i>
                Nenhum registro encontrado  
            </div>
        </div>
    </div>
    @endforelse
    <div class="text-center col-lg-12 col-xs-12">
        {!! $object->render() !!}
    </div>
</div>
@stop