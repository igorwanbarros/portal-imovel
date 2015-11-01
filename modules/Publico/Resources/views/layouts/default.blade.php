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
        
        <style type="text/css">
            .slides .slidesjs-navigation {
                margin-top:5px;
            }
            .slidesjs-container {
                margin-bottom: 1em;
            }

            a.slidesjs-next,
            a.slidesjs-previous,
            a.slidesjs-play,
            a.slidesjs-stop {
                background-image: url(img/btns-next-prev.png);
                background-repeat: no-repeat;
                display:block;
                width:12px;
                height:18px;
                overflow: hidden;
                text-indent: -9999px;
                float: left;
                margin-right:5px;
            }

            a.slidesjs-next {
                margin-right:10px;
                background-position: -12px 0;
            }

            a:hover.slidesjs-next {
                background-position: -12px -18px;
            }

            a.slidesjs-previous {
                background-position: 0 0;
            }

            a:hover.slidesjs-previous {
                background-position: 0 -18px;
            }

            a.slidesjs-play {
                width:15px;
                background-position: -25px 0;
            }

            a:hover.slidesjs-play {
                background-position: -25px -18px;
            }

            a.slidesjs-stop {
                width:18px;
                background-position: -41px 0;
            }

            a:hover.slidesjs-stop {
                background-position: -41px -18px;
            }

            .slidesjs-pagination {
                margin: 7px 0 0;
                float: right;
                list-style: none;
            }

            .slidesjs-pagination li {
                float: left;
                margin: 0 1px;
            }

            .slidesjs-pagination li a {
                display: block;
                width: 13px;
                height: 0;
                padding-top: 13px;
                background-image: url(img/pagination.png);
                background-position: 0 0;
                float: left;
                overflow: hidden;
            }

            .slidesjs-pagination li a.active,
            .slidesjs-pagination li a:hover.active {
                background-position: 0 -13px
            }

            .slidesjs-pagination li a:hover {
                background-position: 0 -26px
            }
        </style>
        
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