@extends('admin::layouts.content_default')

@section('box-body')
<div class="col-lg-12">
    @if(Session::get('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
    @endif
</div>

<div class="col-lg-12">
    <a href="{{ URL::to('admin/web-service/sincronizar') }}" class="btn bg-red">
        <i class="fa fa-download fa-fw"></i> Sincronizar
    </a>
</div>
@stop