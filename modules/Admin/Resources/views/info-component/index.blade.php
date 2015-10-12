@extends('admin::layouts.content_default')

@section('box-body')



<div class="table-responsive">
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/configuracoes/componente/info/cadastrar') }}" title="Cadastrar" class="btn btn-sm btn-warning">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Content</th>
                <th class="text-center">Component</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($object as $infoComponent)
            <tr class="text-center clickable-row" data-url='{{ URL::to('admin/configuracoes/componente/info/' . $infoComponent->id . '/editar') }}'>
                <td>{{ $infoComponent->id }}</td>
                <td>{{ $infoComponent->content }}</td>
                <td>{{ $infoComponent->component->name }}</td>
                <td>
                    <a href="{{ URL::to('admin/configuracoes/componente/info/' . $infoComponent->id . '/editar') }}" title="Editar" class="btn btn-xs btn-success">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/configuracoes/componente/info/' . $infoComponent->id . '/destroy') }}" title="Remover" class="btn btn-xs btn-warning">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop