<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Igor Wanderley">
        <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/base.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/skins/_all-skins.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/estilo.css')}}">

        <title>:: Portal Imoveis ::</title>
    </head>
    <body class="hold-transition skin-red fixed layout-top-nav ">

        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ URL::to('/') }}" class="navbar-brand">
                                <b>Portal Imóveis</b>
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ URL::to('/imoveis') }}">
                                        <i class="fa fa-building-o fa-fw"></i> Imóveis
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope-o fa-fw"></i> Contato
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-info-circle fa-fw"></i> Sobre
                                    </a>
                                </li>
                            </ul>
                            {!! Form::open(['url' => '/','method' => 'get', 'class' => 'navbar-form navbar-left', 'role' => 'search']) !!}
                                <div class="form-group">
                                    {!! Form::text('search',isset($pesquisa) ? $pesquisa : null, ['placeholder' => 'Pesquisar', 'id' => 'navbar-search-input', 'class' => 'form-control']) !!}
                                    <button type="submit" class="btn btn-default btn-flat">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            {!! Form::close() !!}
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- Content Header (Page header) -->
                    @if(!Request::is('/'))
                    <section class="content-header">
                        &nbsp;
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="#">Layout</a></li>
                            <li class="active">Top Navigation</li>
                        </ol>
                    </section>
                    @endif
                    
                    <!-- Main content -->
                    <section class="content">
                        
                        @yield('content')
                        
                    </section><!-- /.content -->
                </div><!-- /.container -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2015 Igor Wanderley.</strong> Todos os direitos reservados.
                </div><!-- /.container -->
            </footer>
        </div><!-- ./wrapper -->

        <script src="{{URL::to('js/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/app.min.js')}}"></script>

        <script type='text/javascript'>
            $('.clickable-row').on('click', function () {
                window.document.location = $(this).data('url');
            });
        </script>
    </body>
</html>