{!! Form::open(array('url' => 'admin/configuracoes/componentes/store')) !!}
<div class="col-lg-6 col-xs-12">
    {!! Form::hidden('id', $paginas->id) !!}
    {!! Form::label('name', 'Nome da Página') !!}
    {!! Form::text('name', $paginas->name, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-xs-12">
    {!! Form::label('title', 'Titulo') !!}
    {!! Form::text('title', $paginas->title, ['class' => 'form-control']) !!}
</div>
{!! Form::close() !!}