@extends('admin::layouts.auth')

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">
                <i class="fa fa-lock fa-fw"></i> Redefinir Senha
            </h3>
        </div>

        <div class="box-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <i class="fa fa-warning fa-fw"></i>
                <strong>Ops!</strong> 
                <br />
                Nao foi possivel autenticar as informaçoes passadas, 
                verifique abaixo o que pode ter acontecido.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                {!! csrf_field() !!}
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label class="col-md-4 control-label">Endereço de E-Mail</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Confirmar Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn bg-red">
                            Redefinir Senha
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
