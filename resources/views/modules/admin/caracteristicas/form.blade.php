@extends('admin::layouts.modal_default')
@section('modal-body')
{!! Form::open([
		'url' 		=> 'admin/caracteristicas/store',
		'method' 	=> 'post',
		'id' 		=> 'form-caracteristica'
	]) !!}
<div class="col-lg-6 col-xs-12">
	{!! Form::label('nome', 'Nome') !!}
	{!! Form::text('nome', $object->nome,['class' => 'form-control']) !!}
</div>

<div class="col-lg-12 col-xs-12 padding-top-2x">
	<button type="submit" name="btn" class="btn bg-red">
		<i class="fa fa-save"></i> Salvar
	</button>
</div>
{!! Form::close() !!}
<div class="clearfix"></div>
<script type="text/javascript">
	$('#form-caracteristica').on('submit', function(event) {
		event.preventDefault();

		var action  = $(this).attr('action'),
			$form	= $(this);

		$.post(action, $form.serialize(), function(response) {
			if (response.status) {
				$('#modal-ajax').modal('hide');
				$('#caracteristica_id').find('option').remove();
			    $.each(response.render, function(key, value) {
			        $('#caracteristica_id').append(
						'<option value=' + key + '>' + value + '</option>');
			    });
			}
		});
	});
</script>
@stop
