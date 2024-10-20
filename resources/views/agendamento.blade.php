<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Contacts 1</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="page">
        <main class="page-content" id="perspective">
            <div class="content-wrapper">
                <div class="page-header page-header-perspective">
                    <div class="page-header-left"><a class="brand" href="{{ route('index') }}"><img
                                src="/assets/img/logo-default-dark-200x36.png" alt="" width="200"
                                height="36" /></a></div>
                </div>
                <div id="wrapper">
                    <button class="btn btn-sm btn-primary btn-block btn-circle"><a
                            href="https://t.me/BarbershopAgendamento_Bot">SEND REQUEST</a></button>

                    <footer class="page-footer page-footer-default">
                        <div class="shell">
                            <div class="range range-xs-center">
                                <div class="cell-lg-10"><a class="brand" href="{{ route('index') }}"><img
                                            src="/assets/img/logo-default-dark-200x36.png" alt="" width="200"
                                            height="36" /></a>
                                    <div class="text-highlighted-wrap">
                                        <p class="text-highlighted">Barbershop is a No.1 place to have a men’s haircut
                                            in San Francisco. Here you can get luxury barber experience at a reasonable
                                            price.</p>
                                    </div>
                                    <ul class="footer-navigation footer-navigation-horizontal">
                                        <li><a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li><a href="{{ route('sobre-barbeiros') }}">Sobre</a>
                                        </li>
                                        <li><a href="{{ route('servico') }}">serviços</a>
                                        </li>
                                        <li class="active"><a href="{{ route('agendamento') }}">Agendamento</a>
                                        </li>
                                        <li><a href="{{ route('login') }}">Login/Registrar</a>
                                        </li>
                                    </ul>
                                    <div class="divider divider-small divider-light block-centered"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div id="perspective-content-overlay"></div>
            </div>
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('index') }}"><img
                                        src="/assets/images/logo-default-dark-200x36.png" alt="" width="200"
                                        height="36" /></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li><a href="{{ route('index') }}">Home</a>
                                        <ul class="rd-navbar-megamenu">
                                            <li>
                                                <p class="rd-megamenu-header"><a href="{{ route('index') }}">Home</a>
                                                </p>
                                                
                                           
                                        </ul>
                                    
                                </ul>
                               
                                <div class="rd-navbar-secondary"><a class="btn btn-xs btn-circle btn-primary"
                                        href="step-1.php">BOOK NOW</a></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </main>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/core.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
