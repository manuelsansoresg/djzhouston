<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    $sections    = get_sections();
    $section_meta = $sections['meta'];
    ?>

    <title>@yield('title')</title>
    <meta name="description" content="{{ $section_meta['description'] }}" />

    <meta name="keywords" content="{{  $section_meta['keyboard'] }}">
    <meta name="description" content="{{ $section_meta['description'] }} ">



    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/vendor_assets/fontawesome-free/css/all.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161458098-1"></script>
    <link rel="stylesheet" href="{{  asset('css/app.css') }}?id={{ strtotime(date('Y-d-d H:i')) }}">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-161458098-1');
    </script>

</head>

<body>
    <?php
    $menu = menuHeader();
    ?>
    <div class="icon-bar">
        <a href="https://www.facebook.com/karlozamora04/" target="_blank" class="" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/djzmixxlive/?hl=es-la" target="_blank" class="" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://soundcloud.com/karlos-zamora" target="_blank" class="" data-toggle="tooltip" data-placement="top" title="Sound Cloud"><i class="fab fa-soundcloud"></i></a>
        <a href="https://www.youtube.com/channel/UCr7337Wez1nxVBfDfgpc45Q/videos" target="_blank" class="" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fab fa-youtube"></i></a>

    </div>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand">
                            <img class="logobg" src="/img/logo_sin_fondo.png" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">

                                <ul>
                                    @foreach($menu as $row_menu)
                                    @if($row_menu == 'INICIO' || $row_menu=='HOME')
                                    <li><a href="/">{{ $row_menu }}</a></li>
                                    @else
                                    <li><a href="/{{ Str::slug($row_menu) }}">{{ $row_menu }}</a></li>
                                    @endif
                                    @endforeach
                                </ul>

                                <!-- Login/Register & Cart Button -->
                                <div class="login-register-cart-button d-flex align-items-center">
                                    <!-- Login/Register -->
                                    <div class="login-register-btn mr-50">
                                        <a href="{{ url('lang', ['eng']) }}" class="{{ (get_lang() == 'eng')? 'text-warning' : ''  }}" id="loginBtn">EN </a> /
                                        <a href="{{ url('lang', ['es']) }}" class="{{ (get_lang() == 'es')? 'text-warning' : ''  }}" id="loginBtn">ES</a>
                                    </div>


                                </div>
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">

                    <p class="copywrite-text"><a href="#">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This web is made with by <a href="https://xpertsystems.com.mx/" target="_blank">Xpertsystems</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            @foreach($menu as $row_menu)
                            @if($row_menu == 'INICIO' || $row_menu=='HOME')
                            <li><a href="/">{{ $row_menu }}</a></li>
                            @else
                            <li><a href="/{{ Str::slug($row_menu) }}">{{ $row_menu }}</a></li>
                            @endif
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="/js/app.js?{{ rand(1,999999) }}"></script>
    <script src="/js/main.js"></script>

</body>

</html>