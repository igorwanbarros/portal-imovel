@extends('admin::layouts.content_default')

@section('box-body')

<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class='active'>
            <a href='#identificacao' data-toggle="tab" aria-expended="true">Identificação</a>
        </li>
        <li>
            <a  href="#imagens"
				data-action="{{URL::to('admin/imoveis-imagem/index/'.$object->id)}}"
				class="tablinks"
				data-toggle="tab"
				aria-expended="true">
				Imagens
			</a>
        </li>
        <li>
            <a  href='#caracteristica'
				data-action="{{URL::to('admin/imoveis-caracteristicas/index/'.$object->id)}}"
				class="tablinks"
				data-toggle="tab"
				aria-expended="true">
				Caracteristicas
			</a>
        </li>
    </ul>
    <!--fim do nav-tabs-->

    <div class="tab-content">
        <div class="tab-pane active" id="identificacao">
                {!! Form::open(array('url' => 'admin/imoveis/store')) !!}
            <div class="col-lg-6 col-xs-12">
                {!! Form::hidden('id', $object->id) !!}
                {!! Form::label('nome', 'Nome') !!}
                {!! Form::text('nome', $object->nome, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('endereco', 'Endereço') !!}
                {!! Form::text('endereco', $object->endereco, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('bairro', 'Bairro') !!}
                {!! Form::text('bairro', $object->bairro, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('cidade', 'Cidade') !!}
                {!! Form::text('cidade', $object->cidade, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('cep', 'Cep') !!}
                {!! Form::text('cep', $object->cep, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('numero', 'Numero') !!}
                {!! Form::text('numero', $object->numero, ['class' => 'form-control']) !!}
            </div>

            <div class="col-lg-6 col-xs-12">
                {!! Form::label('responsavel', 'Responsavel') !!}
                {!! Form::text('responsavel', $object->responsavel, ['class' => 'form-control']) !!}
            </div>

            <div class="padding-top-2x col-lg-12 col-xs-12">
                <button class="btn bg-green-gradient" type="submit" name="action">
                    <i class="fa fa-save fa-fw"></i> Salvar
                </button>

                <a href="{{ URL::to('admin/imoveis/cadastrar') }}" title="Cadastrar" class="btn bg-blue-gradient">
                    <i class="fa fa-file-o fa-fw"></i> Cadastrar
                </a>

                @if(isset($object))
                <a href="{{ URL::to('admin/imoveis/' . $object->id . '/destroy') }}" class="btn bg-red-gradient">
                    <i class="fa fa-trash-o fa-fw"></i> Remover
                </a>
                @endif
            </div>
                {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
        <!--fim da Identificacao do Imovel-->


        <div class="tab-pane" id="imagens">
        </div>
        <!--fim da listagem das Imagens-->

        <div class="tab-pane" id="caracteristica">
        </div>
        <!--fim da listagem das Imagens-->

    </div>
    <!--fim do tab-content-->
</div>
<!--fim da div nav-tabs-custom-->

<div class="col-lg-12 col-xs-12 padding-top-2x text-right">
    <a href="{{ URL::to('admin/imoveis') }}" title="Voltar" class="btn bg-blue-gradient">
        <i class="fa fa-arrow-circle-left fa-fw"></i> Voltar
    </a>
</div>

<script type="text/javascript">
    $('.tablinks').on('click', function(event) {
        event.preventDefault();
        var action = $(this).data('action'),
            tabId  = $(this).attr('href');
		
        $.get(action, function(response) {
            $(tabId).html(response);
        });
    });
</script>
@stop
