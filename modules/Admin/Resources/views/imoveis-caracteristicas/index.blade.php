
    {!! Form::open([
				'url' 		=> 'admin/imoveis-caracteristicas/store',
				'method' 	=> 'post',
				'id'		=> 'form-imovel-caracteristica'
			]) !!}
    <div class="col-lg-6 col-xs-6">
        {!! Form::label('caracteristica_id', 'Caracteristica') !!}
        {!! Form::select('caracteristica_id', $caracteristica,
							$imovel->caracteristica_id,
							['class' => 'form-control']
						) !!}
        {!! Form::hidden('imovel_id',$imovel->id) !!}
    </div>
    <div class="col-lg-6 col-xs-6" style="padding-top: 1.8em;">
		<a href="{{ URL::to('admin/caracteristicas/form') }}"
		   class="btn btn-default modal-ajax"
		   data-toggle="modal" data-target="#modal-ajax">
		   <i class="fa fa-plus"></i>
	   </a>
    </div>
    <div class="col-lg-12 col-xs-12">
		<button type="submit" class="btn bg-red" style="margin-top: 1.8em">
			<i class="fa fa-save fa-fw"></i> Adicionar
		</button>
    </div>
    {!! Form::close() !!}

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>

            @forelse($imovel->caracteristicas as $caracteristica)
            <tr>
                <td>{{ $caracteristica->id }}</td>
                <td>{{ $caracteristica->nome }}</td>
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
<script type="text/javascript">
	$('.modal-ajax').on('click', function(event) {
		event.preventDefault();

		var action = $(this).attr('href');

		$.get(action, function(response) {
			$('#modal-ajax').html(response);
		});
	});

	$('#form-imovel-caracteristica').on('submit', function(event) {
		event.preventDefault();

		var $form 		= $(this),
			action 		= $form.attr('action');

		$.post(action, $form.serialize(), function(response) {
			$('#caracteristica').html(response);
		});
	});
</script>
