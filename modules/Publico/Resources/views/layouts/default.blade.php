<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Igor Wanderley">
        <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/base.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/estilo.css') }}">
        
        <title>:: Portal Imoveis ::</title>
    </head>
    <body class="skin-red layout-top-nav">

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
<!--                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope-o fa-fw"></i> Contato
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-info-circle fa-fw"></i> Sobre
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown user user-menu">
                                    @if (Auth::check())
                                    <a href="{{ URL::to('/auth/logout') }}">
                                        <i class="fa fa-sign-in fa-fw"></i> Sair
                                    </a>
                                    @else
                                    <a href="{{ URL::to('/auth/login') }}">
                                        <i class="fa fa-lock fa-fw"></i> Administração
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-slides-slides-fluid -->
                </nav>
            </header>
            <!-- Full Width Column -->
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Content Header (Page header) -->
                    
                    <!-- Main content -->
                    <section class="content">
                        
                        @yield('content')
                        
                    </section><!-- /.content -->
                </div><!-- /.container-slides-slides -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.0
                    </div>
                    <strong>Copyright &copy; 2015 Igor Wanderley.</strong> Todos os direitos reservados.
                </div><!-- /.container-slides-slides -->
            </footer>
        </div><!-- ./wrapper -->

        <script src="{{URL::to('js/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/app.min.js')}}"></script>
        <script src="{{URL::to('js/jquery.slides.min.js')}}"></script>

        <script type='text/javascript'>
            $('.clickable-row').on('click', function () {
                window.document.location = $(this).data('url');
            });
            
            $('.slides').slidesjs({
                width: 940,
                height: 528,
                play: {
                    active: true,
                    auto: true,
                    interval: 4000,
                    swap: true
                }
            });
        </script>
    </body>
</html>