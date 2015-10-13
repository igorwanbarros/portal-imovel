@extends('admin::layouts.content_default')

@section('box-body')



<div class="table-responsive">
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/configuracoes/componentes/cadastrar') }}" title="Cadastrar" class="btn btn-sm bg-blue-gradient">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Página</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($componentes as $componente)
            <tr class="text-center clickable-row" data-url='{{ URL::to('admin/configuracoes/componentes/' . $componente->id . '/editar') }}'>
                <td>{{ $componente->id }}</td>
                <td>{{ $componente->name }}</td>
                <td>{{ $componente->description }}</td>
                <td>
                    <a href="{{ URL::to('admin/configuracoes/componentes/' . $componente->id . '/editar') }}" title="Editar" class="btn btn-xs bg-green-gradient">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/configuracoes/componentes/' . $componente->id . '/destroy') }}" title="Remover" class="btn btn-xs bg-red-gradient">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Nenhum registro encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    {!! $componentes->render() !!}
</div>

@stop