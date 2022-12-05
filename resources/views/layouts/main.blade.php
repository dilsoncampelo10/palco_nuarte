<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                <!-- <div class="rd-navbar-aside-outer">
                    <div class="rd-navbar-aside">
                       


                    </div>
                </div> -->
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <div class="rd-navbar-nav-wrap">
                            <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                <li><a class="icon fa fa-facebook" href="#"></a></li>
                                <li><a class="icon fa fa-instagram" href="https://www.instagram.com/nuarteip/" target="_blank"></a></li>
                                @auth
                                <li><a class="icon fa-solid fa-bell" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" href="#"></a>

                                    <span class=" position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden"></span>
                                    </span>

                                </li>
                                @endauth
                            </ul>
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li class="rd-nav-item {{ request ()-> routeIs ('home') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home')}}">Palco Nuarte</a>
                                </li>
                                <li class="rd-nav-item {{ request ()-> routeIs ('notice') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('notice')}}">Notícias</a>
                                </li>
                                <li class="rd-nav-item {{request ()-> routeIs ('poetry') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('poetry')}}">Poesias</a>
                                </li>
                                <li class="rd-nav-item {{request ()-> routeIs ('artist') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('artist')}}">Artistas</a>
                                </li>
                                @guest
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('register')}}">Cadastre-se</a>
                                </li>
                                @endguest
                                @auth
                                <li class="rd-nav-item {{ request ()-> routeIs ('project') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('project')}}">Enviar projeto</a>
                                </li>
                                <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('logout')}}">Sair</a>
                                </li>
                                @endauth
                                <li class="rd-nav-item {{request ()-> routeIs ('contact') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('contact')}}">Fale conosco</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @if(session('flash'))
    <div class="alert alert-primary alert-dismissible fade show container" role="alert">
        {{session('flash')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header" style="background-color: #162E44;">
            <h5 class="offcanvas-title text-light" id="offcanvasDarkNavbarLabel">Notificações</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul>
                @if (false)

                <li>dssd</li>

                @else
                <li>
                    <h6 class="">Não há notificações</h6>
                </li>
                @endif
            </ul>
        </div>
    </div>
    </div>
    @yield('content')



    <footer class="section footer-corporate context-dark">
        <div class="footer-corporate-inset">
            <div class="container">
                <div class="row row-40 justify-content-lg-between">
                    <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                        <div class="oh-desktop">
                            <div class="wow slideInRight" data-wow-delay="0s">
                                <h6 class="text-spacing-100 text-uppercase">Caso de Dúvida, entre em contato!</h6>
                                <ul class="footer-contacts d-inline-block d-sm-block">
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">84 9999-99999</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit">
                                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                            <div class="unit-body"><a class="link-aemail" href="mailto:nuarteip.ifrn.edu.br">nuarteip.ifrn.edu.br</a></div>
                                        </div>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/core.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>