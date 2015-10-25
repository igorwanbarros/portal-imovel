<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Igor Wanderley">
        <meta name="description" content="">

        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/base.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::to('css/estilo.css')}}">

        <script src="{{URL::to('js/jQuery-2.1.4.min.js')}}"></script>
        <script src="{{URL::to('js/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::to('js/app.min.js')}}"></script>

        <title>:: Portal Imoveis - Login ::</title>
    </head>
    <body class="layout-top-nav">

        <div class="wrapper">
            <div class="content-wrapper padding-top-3x">
                <section class="content">
                    @yield('content')
                </section>
                <!--fim do content-->
            </div>
            <!--fim do content-wrapper-->

            <footer class="main-footer" style="max-height: 50px;">
                <strong>
                    Copyright &copy; 2015 - Igor Wanderley. Todos os direitos reservados
                </strong>

            </footer>
            <!--fim do main-footer-->

        </div>
        <!-- fim do wrapper-->
    </body>
</html>
