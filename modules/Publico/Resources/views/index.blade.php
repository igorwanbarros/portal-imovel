@extends('publico::layouts.default')

@section('content')
    <?php 
        $row = 1;
    ?>
    
    
    @forelse($object as $imovel)
    @if(($row%2) == 0)
    <div class="row">
    @endif
        
        <div class="col-md-6">
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
                @foreach($imovel->image as $image)
                    <div class="col-lg-6 col-xs-12">
                        <img src="{{ URL::to($image->url) }}" 
                             alt="{{ $image->descricao }}" 
                             style="height: 80px;"/>
                    </div>
                @endforeach
                    <div class="clearfix"></div>
                    <table class="table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <td colspan="2" class="text-bold">
                                    Dados do Imovel
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-bold">
                                    Endereço:
                                </td>
                                <td>
                                    {{ $imovel->endereco }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    Bairro: 
                                </td>
                                <td>
                                    {{ $imovel->bairro }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    Cidade: 
                                </td>
                                <td>
                                    {{ $imovel->cidade }}
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold">
                                    Responsável
                                </td>
                                <td>
                                    {{ $imovel->responsavel }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="description text-right">Atualizado {{ $imovel->updated_at }}</p>
                </div>
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <div class="comment-text">
                            Comentarios . . .
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @if(($row%2) == 0)
    </div>
    @endif
    <?php 
        $row++;
    ?>
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
@stop