@extends('publico::layouts.default')

@section('content')
    @include('publico::imovel-show',['renderCaracteristica' => true])
@stop