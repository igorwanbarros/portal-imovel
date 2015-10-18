
    {!! Form::open(array('url' => 'admin/imoveis-caracteristicas/store','method' => 'post')) !!}
    <div class="col-lg-6 col-xs-6">
        {!! Form::label('caracteristica_id', 'Caracteristica') !!}
        {!! Form::select('caracteristica_id', $caracteristica, $imovel->caracteristica_id, ['class' => 'form-control']) !!}
        {!! Form::hidden('imovel_id',$imovel->id) !!}
    </div>
    <div class="col-lg-6 col-xs-6">
		<button type="submit" class="btn bg-red" style="margin-top: 1.8em">
			Adicionar
		</button>
    </div>
    {!! Form::close() !!}

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @forelse($imovel->caracteristicas as $caracteristica)
            <tr>
                <td>{{ $caracteristica->id }}</td>
                <td>{{ $caracteristica->nome }}</td>
                <td></td>
            </tr>
            @empty
            <tr>
                <td colspan="3">
                    Nenhum registro encontrado.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
