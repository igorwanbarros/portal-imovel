@extends('publico::layouts.default')

@section('content')
    
    <div class="row">
    @foreach($object as $imovel)
        <div class="col-md-4">
            <div class="icon-box icon-box-offset-medium bg-black inverse icon-boxed">
                <i class="icon-large glyph-icon bg-primary icon-picture-o"></i>
                <h3 class="icon-title">{{ $imovel->nome }}</h3>
                <p class="icon-content">{{ $imovel->endereco }}</p>
                @foreach($imovel->image as $image)
                    <img src="{{ URL::to($image->url .'/'. $image->name) }}" 
                         alt="{{ $image->descricao }}" 
                         style="height: 80px;"/>
                @endforeach
            </div>
        </div>
    @endforeach
    </div>
    
@stop