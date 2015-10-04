<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Igor Wanderley">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!--        <link rel="stylesheet" type="text/css" href="{{URL::to('css/bootstrap.min.css') }}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('css/base.min.css') }}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('css/font-awesome.min.css') }}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('css/skins/_all-skins.min.css') }}">
                <link rel="stylesheet" type="text/css" href="{{URL::to('css/estilo.css') }}">-->


        <title>:: Portal Imoveis ::</title>


        <!-- JS Core -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/js-core.js') }}"></script>

        <script type="text/javascript">
            $(window).load(function () {
                setTimeout(function () {
                    $('#loading').fadeOut(400, "linear");
                }, 300);
            });
        </script>
        <style>
            #loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
            #loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
        </style>

        <!-- HELPERS -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/helpers/helpers-all.css') }}">

        <!-- ELEMENTS -->

        <link rel="stylesheet" type="text/css" href="{{URL::to('assets-publico/elements/elements-all.css') }}">

        <!-- Icons -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/icons/linecons/linecons.css') }}">

        <!-- SNIPPETS -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/snippets/snippets-all.css') }}">

        <!-- APPLICATIONS -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/applications/mailbox.css') }}">



        <!-- Frontend Theme -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/themes/supina/default/framework-color.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/themes/supina/border-radius.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/themes/supina/frontend/color.css') }}">

        <!-- Color Helpers CSS -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/helpers/colors.css') }}">


    </head>
    <body class="frontend-layout"> 


        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/layerslider/layerslider.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/js-core/greensock.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/layerslider/layerslider.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/layerslider/layerslider-transitions.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/layerslider/layerslider-demo.js') }}"></script>


        <div class="featured-area">
            <div class="main-header bg-black-opacity header-fixed wow fadeInDown" data-0="padding: 23px 0;" data-250="padding: 8px 0;">
                <div class="container clearfix">
                    <a href="#" class="hidden-desktop" id="responsive-menu" title="">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="{{ URL::to('publico/') }}" class="logo" title="Supina">
                        Portal Imóveis
                    </a>
                    <ul class="main-nav nav-alt">
                        <li>
                            <a href="#" title="Headers">
                                Imóveis
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Widgets">
                                Sobre
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Portfolios">
                                Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!-- .main-header -->

            <div id="layerslider" style="width:100%;height:50px;">
                
            </div>
<!--            <div id="layerslider" style="width:100%;height:500px;">
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ URL::to('assets-publico/dummy-images/fw-1.jpg') }}" class="ls-bg" alt="Slide background"><img class="ls-l" style="top:280px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:300;delayin:500;offsetxout:0;offsetyout:-50;durationout:1000;showuntil:220;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;transformoriginout:50% top 0;" src="{{ URL::to('assets-publico/dummy-images/s1.png') }}" alt=""><img class="ls-l" style="top:230px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:30;delayin:1720;scalexin:0.9;scaleyin:0.9;offsetxout:0;offsetyout:300;durationout:1000;scalexout:0.5;scaleyout:0.5;transformoriginout:50% bottom 0;" src="{{ URL::to('assets-publico/dummy-images/s2.png') }}" alt=""><img class="ls-l" style="top:65%;left:50%;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:250;durationin:950;delayin:500;offsetxout:0;offsetyout:-8;durationout:1000;showuntil:270;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" src="{{ URL::to('assets-publico/dummy-images/s2.jpg') }}" alt=""><img class="ls-l" style="top:195px;left:50%;white-space: nowrap;" data-ls="offsetxin:0;delayin:1720;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;" src="{{ URL::to('assets-publico/dummy-images/s1.jpg') }}" alt="">
                    <p class="ls-l" style="top:150px;left:116px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#82d10c;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;">
                        FRESH FEATURES
                    </p>
                    <p class="ls-l" style="top:190px;left:125px;font-family:&apos;Indie Flower&apos;;font-size:31px;color:#6db509;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;">
                        for starter
                    </p>
                    <img class="ls-l ls-linkto-3" style="top:460px;left:610px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="{{ URL::to('assets-publico/dummy-images/left.png') }}" alt=""><img class="ls-l ls-linkto-2" style="top:460px;left:650px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="{{ URL::to('assets-publico/dummy-images/right.png') }}" alt="">
                </div>
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ URL::to('assets-publico/dummy-images/fw-1.jpg') }}" class="ls-bg" alt="Slide background"><img class="ls-l" style="top:157px;left:284px;white-space: nowrap;" data-ls="offsetxin:300;durationin:2000;offsetxout:-300;parallaxlevel:-1;" src="{{ URL::to('assets-publico/dummy-images/l1.png') }}" alt=""><img class="ls-l" style="top:20px;left:50%;white-space: nowrap;" data-ls="offsetxin:600;durationin:2000;offsetxout:-600;parallaxlevel:1;" src="{{ URL::to('assets-publico/dummy-images/l2.png') }}" alt=""><img class="ls-l" style="top:37px;left:564px;white-space: nowrap;" data-ls="offsetxin:900;durationin:2000;offsetxout:-900;parallaxlevel:4;" src="{{ URL::to('assets-publico/dummy-images/l3.png') }}" alt="">
                    <p class="ls-l" style="top:170px;left:174px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#f04705;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:10;">
                        SPICY PARALLAX EFFECT
                    </p>
                    <p class="ls-l" style="top:210px;left:183px;font-family:&apos;Indie Flower&apos;;font-size:31px;color:#f04705;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;parallaxlevel:8;">
                        for main course
                    </p>
                    <img class="ls-l ls-linkto-1" style="top:430px;left:210px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;offsetxout:-50;parallaxlevel:3;" src="{{ URL::to('assets-publico/dummy-images/left.png') }}" alt=""><img class="ls-l ls-linkto-3" style="top:430px;left:250px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;parallaxlevel:3;" src="{{ URL::to('assets-publico/dummy-images/right.png') }}" alt="">
                </div>
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ URL::to('assets-publico/dummy-images/fw-1.jpg') }}" class="ls-bg" alt="Slide background"><img class="ls-l" style="top:129px;left:487px;white-space: nowrap;" data-ls="offsetxin:400;durationin:2000;offsetxout:400;" src="{{ URL::to('assets-publico/dummy-images/d1.png') }}" alt=""><img class="ls-l" style="top:104px;left:70px;white-space: nowrap;" data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;" src="{{ URL::to('assets-publico/dummy-images/d2.png') }}" alt="">
                    <p class="ls-l" style="top:320px;left:830px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#544f8c;border-radius:3px;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-400;durationout:1000;">
                        SWEET TRANSITIONS
                    </p>
                    <p class="ls-l" style="top:360px;left:836px;font-family:&apos;Indie Flower&apos;;font-size:31px;color:#544f8c;white-space: nowrap;" data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-600;">
                        for dessert
                    </p>
                    <img class="ls-l ls-linkto-2" style="top:430px;left:960px;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;offsetxout:-50;" src="{{ URL::to('assets-publico/dummy-images/left.png') }}" alt=""><img class="ls-l ls-linkto-1" style="top:430px;left:1000px;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="{{ URL::to('assets-publico/dummy-images/right.png') }}" alt="">
                </div>
            </div>-->

        </div>

        <div class="medium-padding">


            @yield('content')
            <div class="owl-carousel-1 slider-wrapper carousel-wrapper carousel-wrapper-alt carousel-container">
            </div>

        </div>

        <div class="small-padding dummy-light-bg">

            <div class="container">
                <div class="feature-box small-padding clearfix">
                    
                    
                </div>
            </div>
        </div>
        <div class="main-footer inverse clearfix bg-black">
            <div class="footer-pane">
                <div class="container clearfix">
                    <div class="logo">&copy; 2014 Supina. All Rights Reserved.</div>

                    <ul class="footer-nav">
                        <li><a href="#" title="Portfolio">Widgets</a></li>
                        <li><a href="#" title="Layout">Layout</a></li>
                        <li><a href="#" title="Elements">Elements</a></li>
                        <li><a href="#" title="">Pricing tables</a></li>
                        <li><a href="#" title="Portfolio">Portfolio</a></li>
                    </ul>

                </div>
            </div>
        </div>



        <!-- WIDGETS -->



        <!-- WIDGETS -->

        <!-- Bootstrap Dropdown -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/dropdown/dropdown.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/dropdown/dropdown.js') }}"></script>

        <!-- PieGage charts -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/charts/piegage/piegage.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/charts/piegage/piegage.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/charts/piegage/piegage-demo.js') }}"></script>

        <!-- Bootstrap Tooltip -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/tooltip/tooltip.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/tooltip/tooltip.js') }}"></script>

        <!-- Bootstrap Popover -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/popover/popover.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/popover/popover.js') }}"></script>


        <!-- Bootstrap Buttons -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/button/button.js') }}"></script>

        <!-- Bootstrap Collapse -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/collapse/collapse.js') }}"></script>

        <!-- Bootstrap Progress Bar -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/progressbar/progressbar.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/progressbar/progressbar.js') }}"></script>

        <!-- Uniform -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/uniform/uniform.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/uniform/uniform.js') }}"></script>

        <!-- Chosen -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/chosen/chosen.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/chosen/chosen.js') }}"></script>

        <!-- Superfish -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/superfish/superfish.js') }}"></script>

        <!-- Superclick -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/superclick/superclick.js') }}"></script>

        <!-- Nice scroll -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/nicescroll/nicescroll.js') }}"></script>

        <!-- Overlay -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/overlay/overlay.js') }}"></script>

        <!-- jQueryUI Autocomplete -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/autocomplete/autocomplete.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/autocomplete/menu.js') }}"></script>

        <!-- Skycons -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/skycons/skycons.js') }}"></script>

        <!-- Content box -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/content-box/contentbox.js') }}"></script>

        <!-- Bootstrap Tabs -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/tabs/tabs.js') }}"></script>

        <!-- Sparklines charts -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/charts/sparklines/sparklines.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/charts/sparklines/sparklines-demo.js') }}"></script>

        <!-- Slidebars -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/slidebars/slidebars.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/slidebars/slidebars.js') }}"></script>

        <!-- Widgets init for demo -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets-init.js') }}"></script>

        <!-- Theme layout -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/themes/supina/js/layout.js') }}"></script>





        <!-- FRONTEND ELEMENTS -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/frontend-elements/frontend-elements-all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/frontend-elements/frontend-responsive.css') }}">

        <!-- Skrollr -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/skrollr/skrollr.js') }}"></script>

        <!-- Owl carousel -->

        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets-publico/widgets/owlcarousel/owlcarousel.css') }}">
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/owlcarousel/owlcarousel.js') }}"></script>
        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/owlcarousel/owlcarousel-demo.js') }}"></script>

        <!-- HG sticky -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/sticky/sticky.js') }}"></script>

        <!-- WOW -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/widgets/wow/wow.js') }}"></script>

        <!-- Theme layout -->

        <script type="text/javascript" src="{{ URL::to('assets-publico/themes/supina/frontend/js/frontend-init.js') }}"></script>

        <script type="text/javascript">
            var s = skrollr.init([
                smoothScrolling = true
            ]);
        </script>
    </body>
</html>