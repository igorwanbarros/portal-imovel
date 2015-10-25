@extends('admin::layouts.auth')

@section('content')
<div class="col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
    <div class="box box-solid">
        <div class="box-header">
            <h3 class="box-title">
                <i class="fa fa-lock fa-fw"></i> Acesso Restrito
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
            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                {!! csrf_field() !!}

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
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Lembre-me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn bg-red">
                            <i class="fa fa-sign-in fa-fw"></i> Entrar
                        </button>
                    </div>

                    <div class="col-md-6 col-md-offset-4 padding-top-2x text-right">
                        <a class="btn btn-default" href="{{ url('/password/email') }}">Esqueceu a senha?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
