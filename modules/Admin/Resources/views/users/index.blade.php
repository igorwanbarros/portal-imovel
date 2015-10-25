@extends('admin::layouts.content_default')

@section('box-body')

<div class="table-responsive">
    <div class="col-lg-12 col-xs-12 padding-bottom-2x text-right">
        <a href="{{ URL::to('admin/usuarios/cadastrar') }}" title="Cadastrar" class="btn btn-sm bg-red">
            <i class="fa fa-file-o fa-fw"></i> Cadastrar
        </a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="text-center">Código</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($object as $object)
            <tr class="text-center clickable-row" data-url='{{ URL::to('admin/usuarios/' . $object->id . '/editar') }}'>
                <td>{{ $object->id }}</td>
                <td>{{ $object->name }}</td>
                <td>{{ $object->email }}</td>
                <td>{{ $object->created_at }}</td>
                <td>
                    <a href="{{ URL::to('admin/usuarios/' . $object->id . '/editar') }}" title="Editar" class="btn btn-xs bg-green">
                        <i class="fa fa-edit fa-fw"></i>
                    </a>
                    <a href="{{ URL::to('admin/usuarios/' . $object->id . '/destroy') }}" title="Remover" class="btn btn-xs bg-red">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@stop
