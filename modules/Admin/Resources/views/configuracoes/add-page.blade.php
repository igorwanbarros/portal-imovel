@extends('admin::layouts.content_default')

@section('box-body')
{!! Form::open(['url' => 'admin/','method' => 'post']) !!}
{!! Form::label('titulo_pagina', 'Titulo da Página') !!}
{!! Form::text('titulo_pagina',null,['class' => 'form-control']) !!}
{!! Form::close() !!}
@stop