@extends('admin::layouts.content_default')

@section('box-body')



<div class="table-responsive">
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/imoveis/cadastrar') }}" title="Cadastrar" class="btn btn-sm bg-blue-gradient">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Nome do Imóvel</th>
                <th class="text-center">Endereço</th>
                <th class="text-center">Número</th>
                <th class="text-center">Bairro</th>
                <th class="text-center">Cep</th>
                <th class="text-center">Cidade</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($imoveis as $imovel)
            <tr class="text-center clickable-row" data-url='{{ URL::to('admin/imoveis/' . $imovel->id . '/editar') }}'>
                <td>{{ $imovel->id }}</td>
                <td>{{ $imovel->nome }}</td>
                <td>{{ $imovel->endereco }}</td>
                <td>{{ $imovel->numero }}</td>
                <td>{{ $imovel->bairro }}</td>
                <td>{{ $imovel->cep }}</td>
                <td>{{ $imovel->cidade }}</td>
                <td>
                    <a href="{{ URL::to('admin/imoveis/' . $imovel->id . '/editar') }}" title="Editar" class="btn btn-xs bg-green-gradient">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/imoveis/' . $imovel->id . '/destroy') }}" title="Remover" class="btn btn-xs bg-red-gradient">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {!! $imoveis->render() !!}
</div>

@stop