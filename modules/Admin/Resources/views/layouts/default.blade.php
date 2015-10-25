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

        <!--<link rel="stylesheet" type="text/css" href="{{URL::to('plugincss/estilo.css')}}">-->
        <script src="{{URL::to('js/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/app.min.js')}}"></script>

        <script src="{{URL::to('plugins/ckeditor/ckeditor.js')}}"></script>


        <title>:: Portal Imoveis ::</title>
    </head>
    <body class="hold-transition skin-red sidebar-mini fixed">

        <div class="wrapper">
            <header class="main-header">
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini" title="Doce Doce">P <b>Imv</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Portal Imoveis</b></span>
                </a>

                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="user user-menu">
                                <a href="{{ URL::to('auth/logout/') }}">
                                    <i class="fa fa-sign-out fa-fw"></i>Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--fim do custom-nav-bar-->
                </nav>
                <!--fim do nav-->
                
            </header>
            <!--fim do header-->

            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
                            <br /><br />
                        </div>
                        <div class="pull-left info">
                            <p>Igor Wanderley</p>
                            <a ><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!--fim do user-painel-->

                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        <li class="{{ Request::is('admin/') || Request::is('admin/index') ? 'active' : '' }}">
                            <a href="{{URL::to('admin/index')}}">
                                <i class="fa fa-home "></i> <span>Inicio</span>
                            </a>
                        </li>
                        <li class='{{ Request::is('admin/imoveis/*') || Request::is('admin/imoveis') ? 'active' : '' }}'>
                            <a href='{{URL::to('admin/imoveis')}}'>
                                <i class='fa fa-building-o fa-fw'></i>
                                <span> Imoveis</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/usuarios/*') || Request::is('admin/usuarios') ? 'active' : '' }}">
                            <a href='{{ URL::to('admin/usuarios/index') }}'>
                                <i class='fa fa-users fa-fw'></i>
                                <span> Usuários</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="{{ Request::is('admin/configuracoes/*') || Request::is('admin/configuracoes') ? 'active' : '' }}">
                            <a href='#'>
                                <i class='fa fa-gears fa-fw'></i>
                                <span> Construir Páginas</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="{{ Request::is('admin/configuracoes/paginas') ? 'active' : '' }}">
                                    <a href="{{URL::to('admin/configuracoes/paginas')}}">
                                        <i class='fa fa-file-o fa-fw'></i>
                                        Páginas
                                    </a>
                                </li>
<!--                                <li class="{{ Request::is('admin/configuracoes/componente') ? 'active' : '' }}">
                                    <a href="{{URL::to('admin/configuracoes/componente')}}">
                                        <i class='fa fa-file-word-o fa-fw'></i>
                                        Componentes
                                    </a>
                                </li>
                                <li class="{{ Request::is('admin/configuracoes') ? 'active' : '' }}">
                                    <a href="{{URL::to('admin/configuracoes')}}">
                                        <i class='fa fa-columns fa-fw'></i>
                                        Layouts
                                    </a>
                                </li>-->
                            </ul>
                        </li>
                    </ul>
                    <!--fim da sidebar-menu - lista do menu inicial-->

                </section>
                <!--fim do menu principal-->
            </aside>
            <!--fim do main-sidebar-->

            <div class="content-wrapper">
                <section class="content">
                    @yield('content')
					<div class="modal fade" tabindex="-1"
						 role="dialog" id="modal-ajax">

					</div>
                </section>
                <!--fim do content-->
            </div>
            <!--fim do content-wrapper-->

            <footer class="main-footer">
                <strong>
                    Copyright &copy; 2015 - Igor Wanderley. Todos os direitos reservados
                </strong>

            </footer>
            <!--fim do main-footer-->

        </div>
        <!-- fim do wrapper-->
        <script type='text/javascript'>
            $('.clickable-row').on('click', function() {
                window.document.location = $(this).data('url');
            });

			$('.remover').on('click', function(event) {
				event.preventDefault();

				var $a 		= $(this),
					action = $a.attr('href');

				$.get(action, function(response) {
					if (response.status){
						$a.parents('tr').remove();
					}
				});
			});

            CKEDITOR.replace('.ckeditor');
        </script>
    </body>
</html>
