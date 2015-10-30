<div  id="list-imoveis-imagens">
    {!! Form::open(array('url' => 'admin/imoveis-imagem/store','id' => 'form-imoveis-imagens','method' => 'post', 'files' => true)) !!}
    <div class="col-lg-6 col-xs-6">
        {!! Form::label('image', 'Selecione uma Imagem') !!}
        {!! Form::file('image') !!}
        {!! Form::hidden('imovel_id',$imovelId) !!}
    </div>

    <div class="col-lg-6 col-xs-6">
        {!! Form::label('descricao', 'Descrição da Imagem') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-lg-12 col-xs-12 padding-top-2x">
        <button type="submit" id="btn-imoveis-imagens" class="btn bg-red-gradient">
            <i class="fa fa-save"></i> Adicionar
        </button>
    </div>
    {!! Form::close() !!}
    <div class="clearfix"></div>

    <div class=" padding-top-3x">
        @foreach($object as $imagem)
        <div class="col-lg-3 col-xs-6" id="box-image-{{$imagem->id}}">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-file-image-o fa-fw"></i>
                        {{ $imagem->descricao }}
                    </h3>
                </div>
                <div class="box-body">
                    <img class="img-rounded img-responsive"
                         alt="{{ $imagem->descricao }}"
                         style="height: 100px;margin:0 auto;"
                         src="{{ URL::to($imagem->url) }}"/>
                </div>
                <div class="box-footer text-right">
                    <a href="{{ URL::to('admin/imoveis-imagem/' . $imagem->id . '/destroy') }}"
                       class="btn bg-yellow-gradient btn-sm remove"
					   data-parent="box-image-{{$imagem->id}}">
                        <i class="fa fa-trash-o fa-fw"></i> Remover
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
</div>

<script type="text/javascript">
	$('.remove').on('click', function(event) {
		event.preventDefault();

		var action 	= $(this).attr('href'),
			parent 	= $(this).data('parent');

		$.get(action, function(response) {
			if (response.status === 1) {
				$('#' + parent).remove();
			}
		});
	});
</script>
