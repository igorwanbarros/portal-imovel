{!! Form::open(array('url' => 'admin/configuracoes/paginas-componentes/store', 'id' => 'pages_components')) !!}
<div class="col-lg-6 col-xs-12">
    {!! Form::hidden('id', null) !!}
    {!! Form::hidden('page_id', $paginas->id) !!}
    {!! Form::label('component_id', 'Componente') !!}
    {!! Form::select('component_id', $componentes, null, ['class' => 'form-control']) !!}
</div>

<div class="padding-top-2x col-lg-12 col-xs-12">
    <button class="btn bg-green-gradient" type="submit" name="action">
        <i class="fa fa-save fa-fw"></i> Adicionar
    </button>
</div>

{!! Form::close() !!}

<div class="col-lg-12 col-xs-12 table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Componente</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php // dd($paginas->components)?>
            @forelse($paginas->components as $component)
            <tr>
                <td>{{ $component->id }}</td>
                <td>{{ $component->name }}</td>
                <td>
                    <a href="{{ URL::to('admin/configuracoes/paginas-componentes/' . $component->id . '/destroy') }}" title="Remover" class="btn btn-xs bg-red-gradient">
                        <i class="fa fa-trash-o fa-fw"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Nenhum component cadastrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>