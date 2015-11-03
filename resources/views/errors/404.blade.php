@extends('publico::layouts.default')
@section('content')
<div class="box box-solid">
    <div class="box-body">
        <div class="col-lg-6 col-xs-12 text-center">
            <img src="{{ URL::to('img/404.png') }}" 
                 alt="Página não encontrada" 
                 style="width: 75%;" />
        </div>
        <div class="col-lg-6 col-xs-12" style="font-size: 1.5em;">
            <h1 class="title">Página não encontrada</h1>
            <p class="text-justify">
                A página solicitada não foi encontrada ou foi removida para outro endereço.
            </p>
            <p class="text-justify">
                Tente uma das opções a seguir:
            </p>
            <ul class="list-group">
                <li class="list-group-item">
                    <i class="fa fa-check"></i> Verifique o endereço informado e tente novamente
                </li>
                <li class="list-group-item">
                    <a href="{{ URL::to('/') }}">
                        <i class="fa fa-check"></i> Ir para página inicial
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="{{ URL::to('/imoveis') }}">
                        <i class="fa fa-check"></i> Ir para listagem dos imoveis
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop