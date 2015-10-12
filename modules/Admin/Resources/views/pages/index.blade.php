@extends('admin::layouts.content_default')

@section('box-body')



<div class="table-responsive">
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/configuracoes/paginas/cadastrar') }}" title="Cadastrar" class="btn btn-sm bg-blue-gradient">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Página</th>
                <th class="text-center">Titulo</th>
                <th class="text-center">Descrição</th>
                <th class="text-center">Ativada</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @forelse($paginas as $pagina)
            <tr class="text-center clickable-row" data-url='{{ URL::to('admin/configuracoes/paginas/' . $pagina->id . '/editar') }}'>
                <td>{{ $pagina->id }}</td>
                <td>{{ $pagina->name }}</td>
                <td>{{ $pagina->title }}</td>
                <td>{{ $pagina->description }}</td>
                <td>{{ $pagina->active == '1' ? 'Não' : 'Sim' }}</td>
                <td>
                    <a href="{{ URL::to('admin/configuracoes/paginas/' . $pagina->id . '/editar') }}" title="Editar" class="btn btn-xs bg-green-gradient">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/configuracoes/paginas/' . $pagina->id . '/destroy') }}" title="Remover" class="btn btn-xs bg-red-gradient">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    {!! $paginas->render() !!}
</div>

@stop