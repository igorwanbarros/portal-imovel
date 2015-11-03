<?php
    $id = $imovel->imovel_id;
    
    if ($renderCaracteristica) {
        $id = $imovel->id;
    }
?>
<div class="col-lg-12 col-xs-12">
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="user-block">
                <i class="img-circle fa fa-building-o fa-fw"></i> 
                <a href="{{ URL::to('/imoveis/'.$id.'/visualizar') }}" target="_blank">
                    {{ $imovel->nome }}
                </a>
                <div class="font-light">
                    Cadastrado {{ $imovel->created_at }}
                </div>
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
                            R$ {{ number_format($imovel->valor,2,',','.') ? : 'Não informado' }}
                        </div>
                    </div>

                    @if ($renderCaracteristica)
                    <div class="attachment-text">
                        <h4 class="text-red">Caracteristicas</h4>
                        <div class="comment-text">
                          <ul>
                          @forelse($imovel->caracteristicas as $carac)
                              <li>{{ $carac->nome }}</li>
                          @empty
                              <li>Nenhuma caracteristica cadastrada</li>
                          @endforelse
                          </ul>
                        </div>
                    </div>
                    @endif
                    
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
