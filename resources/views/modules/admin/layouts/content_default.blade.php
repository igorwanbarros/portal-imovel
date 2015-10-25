@extends('admin::layouts.default')

@section('content')
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">
                @if(isset($title))
                    {{$title}}
                @endif
            </h3>
            <!--fim do box-title-->
            
            <div class="box-tools pull-right">
                <div class="pull-right box-tools">
                    <button class="btn btn-box-tool btn-sm" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!--fim do box-tolls-->
            
        </div>
        <!--fim do box-header-->

        <div class="box-body">
            @yield('box-body')
        </div>
        <!--fim do box body-->
    </div>
    <!--fim do box-->
@stop