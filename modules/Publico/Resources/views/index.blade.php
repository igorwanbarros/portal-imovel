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
                                    'placeholder' => 'Bairro', 
                                    'class' => 'form-control'
                                ]
                    ) 
                !!}
                
                {!! 
                    Form::label('caracteristica', 'Caracteristica do Imovel') 
                !!}
                {!! 
                    Form::text('caracteristica', 
                        $pesquisa->caracteristica, 
                        [
                            'placeholder' => 'Nome da Caracteristica ', 
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
        <div class="col-lg-12 col-xs-12">
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <i class="img-circle fa fa-building-o fa-fw"></i> 
                        {{ $imovel->nome }}
                        <span class="description">
                            Cadastrado {{ $imovel->created_at }}
                        </span>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-lg-6 col-xs-12">
                        @if(isset($imovel->image[0]))
                        <div class="container-slides">
                            <div class="slides">
                            @foreach($imovel->image as $image)
                                <div class="col-lg-6 col-xs-12">
                                    <img src="{{ URL::to($image->url) }}" 
                                         alt="{{ $image->descricao }}" 
                                         style="width: 100%;" />
                                </div>
                            @endforeach
                            </div>
                        </div>
                        @else
                            <img src="{{ URL::to('img/image_not_found.png') }}" 
                                 alt="" 
                                 style="width: 100%;" />
                        @endif
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="attachment-block clearfix">
                            <div class="attachment-text">
                                <h4 class="text-red">Observação</h4>
                                <div class="comment-text">
                                    {{ $imovel->observacao ? : 'Não Informado'}}
                                </div>
                            </div>
                            
                            <div class="attachment-text">
                                <h4 class="text-red">Endereço</h4>
                                <div class="comment-text">
                                    {{ $imovel->endereco ?: 'Rua Não informada'}}, 
                                    Nº {{ $imovel->numero ?: 'Não informado' }}, 
                                    Bairro {{ $imovel->bairro ?: 'Não informado' }},
                                    Cidade {{ $imovel->cidade ?: 'Não informada' }}
                                    /{{ $imovel->uf ?: 'Não informado' }}.
                                </div>
                            </div>
                            
                            <div class="attachment-text">
                                <h4 class="text-red">Responsável</h4>
                                <div class="comment-text">
                                    {{ $imovel->responsavel ? : 'Não informado' }}
                                </div>
                            </div>
                            
                            <div class="attachment-text">
                                <h4 class="text-red">Valor</h4>
                                <div class="comment-text">
                                    R$ {{ $imovel->valor ? : 'Não informado' }}
                                </div>
                            </div>
                            
                            <div class="attachment-text text-right">
                                <h4 class="text-red">Atualizado</h4>
                                <div class="comment-text">
                                    {{ $imovel->updated_at }}
                                </div>
                            </div>
                            
                            <div class="attachment-text text-right">
                                <br/>
                                <div class="comment-text">
                                    @if (Auth::check())
                                    <a href="{{ URL::to('admin/imoveis/'.$imovel->id.'/editar') }}" class="text-red text-bold">
                                        <i class="fa fa-edit fa-fw"></i> Editar Imovel
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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