<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Barbers</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700%7CArvo:400,700">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="img/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>
    <div class="page">
        <main class="page-content" id="perspective">
            <div class="content-wrapper">
                <div class="page-header page-header-perspective">
                    <div class="page-header-left"><a class="brand" href="{{ route('index') }}"><img
                                src="/assets/img/logo-default-dark-200x36.png" alt="" width="200"
                                height="36" /></a></div>
                    <div class="page-header-right">

                    </div>
                </div>
                <div id="wrapper">
                    <div class="page-title">
                        <div class="page-title-content">
                            <div class="shell">
                                <p class="page-title-header">Nossos barbeiros</p>
                            </div>
                        </div>
                    </div>
                    <section class="section-xl bg-periglacial-blue text-center">
                        <div class="shell">
                            <div class="p text-width-medium">
                                <p class="big">Empregamos apenas barbeiros altamente qualificados que não são apenas
                                  profissionais, mas também gostam de manter o clima de uma barbearia clássica.
                                </p>
                            </div>
                        </div>
                        <div class="shell">
                            <div class="range range-30">
                                <div class="cell-sm-6 cell-md-4 height-fill">
                                    <div class="thumbnail-card"><img class="thumbnail-card-image"
                                            src="/assets/img/barbers-1-370x310.jpg" alt="" width="370"
                                            height="310" />
                                        <div class="thumbnail-card-body">
                                            <p class="thumbnail-card-header" data-toggle="modal"
                                                data-target="#modalWindow">Simon Wilson</p>
                                            <div class="thumbnail-card-text">
                                                <p>Sr. Wilson é o fundador e proprietário da nossa barbearia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-sm-6 cell-md-4 height-fill">
                                    <div class="thumbnail-card"><img class="thumbnail-card-image"
                                            src="/assets/img/barbers-2-370x310.jpg" alt="" width="370"
                                            height="310" />
                                        <div class="thumbnail-card-body">
                                            <p class="thumbnail-card-header" data-toggle="modal"
                                                data-target="#modalWindow">Harry Anderson</p>
                                            <div class="thumbnail-card-text">
                                                <p>Harry traz uma abordagem detalhada e meticulosa ao estilo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cell-sm-6 cell-md-4 height-fill">
                                    <div class="thumbnail-card"><img class="thumbnail-card-image"
                                            src="/assets/img/barbers-3-370x310.jpg" alt="" width="370"
                                            height="310" />
                                        <div class="thumbnail-card-body">
                                            <p class="thumbnail-card-header" data-toggle="modal"
                                                data-target="#modalWindow">Matthew phillips</p>
                                            <div class="thumbnail-card-text">
                                                <p>Matthew tem vários anos de experiência na indústria de barbearia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <footer class="page-footer page-footer-default">
                        <div class="shell">
                            <div class="range range-xs-center">
                                <div class="cell-lg-10"><a class="brand" href="{{ route('index') }}.php"><img
                                            src="/assets/img/logo-default-dark-200x36.png" alt=""
                                            width="200" height="36" /></a>
                                    <div class="text-highlighted-wrap">
                                        <p class="text-highlighted">A barbearia é o lugar número 1 para fazer cortes de cabelo masculinos
                                          em São Francisco. Aqui você pode obter uma experiência de barbeiro de luxo por um preço razoável
                                          preço.</p>
                                    </div>
                                    <ul class="footer-navigation footer-navigation-horizontal">
                                        <li><a href="{{ route('index') }}">Home</a>
                                        </li>
                                        <li class="active"><a href="{{ route('sobre-barbeiros') }}">Sobre</a>
                                        </li>
                                        <li><a href="{{ route('servico') }}">serviços</a>
                                        </li>
                                        <li><a href="{{ route('login') }}">Agendamento</a>
                                        </li>
                                        <li><a href="{{ route('login') }}">Login/Registrar</a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <div id="perspective-content-overlay"></div>
            </div>
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar"
                    data-stick-up-clone="false">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('index') }}.php"><img
                                        src="/assets/img/logo-default-dark-200x36.png" alt="" width="200"
                                        height="36" /></a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li><a href="{{ route('index') }}.php">Home</a>
                                        <ul class="rd-navbar-megamenu">
                                            <li>
                                                <p class="rd-megamenu-header"><a
                                                        href="{{ route('index') }}.php">Home</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="home-variant-2.php">Home variant 2</a></li>
                                                    <li><a href="home-variant-3.php">Home variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="about.php">About</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="barbers.php">barbers</a></li>
                                                    <li><a href="testimonials.php">Testimonials</a></li>
                                                    <li><a href="faq.php">FAQ</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Contact Us</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="contacts-1.php">Contacts 1</a></li>
                                                    <li><a href="contacts-2.php">Contacts 2</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="services.php">Services</a></p>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Book</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="step-1.php">Step 1</a></li>
                                                    <li><a href="step-2.php">Step 2</a></li>
                                                    <li><a href="step-3.php">Step 3</a></li>
                                                    <li><a href="step-4.php">Step 4</a></li>
                                                    <li><a href="finish.php">Finish</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Blog</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-post.php">Single post</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="shop.php">Shop</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="single-product.php">Single product</a></li>
                                                    <li><a href="cart.php">Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Pages</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="404-page.php">404 page</a></li>
                                                    <li><a href="503-page.php">503 page</a></li>
                                                    <li><a href="maintenance.php">Maintenance</a></li>
                                                    <li><a href="coming-soon.php">Coming soon</a></li>
                                                    <li><a href="privacy-policy.php">Privacy policy</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="header-perspective.php">Header perspective</a></li>
                                                    <li><a href="header-transparent.php">Header transparent</a></li>
                                                    <li><a href="header-fullwidth.php">Header fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="footer-default.php">Footer default</a></li>
                                                    <li><a href="footer-variant-2.php">Footer variant 2</a></li>
                                                    <li><a href="footer-variant-3.php">Footer variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Additional</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="buttons.php">Buttons</a></li>
                                                    <li><a href="forms.php">Forms</a></li>
                                                    <li><a href="grid.php">Grid</a></li>
                                                    <li><a href="progress-bars.php">Progress Bars</a></li>
                                                    <li><a href="tables.php">Tables</a></li>
                                                    <li><a href="tabs-and-accordions.php">Tabs and Accordions</a></li>
                                                    <li><a href="typography.php">Typography</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="about.php">About</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="barbers.php">barbers</a>
                                            </li>
                                            <li><a href="testimonials.php">Testimonials</a>
                                            </li>
                                            <li><a href="faq.php">FAQ</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="services.php">Services</a>
                                    </li>
                                    <li><a href="blog.php">Blog</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="single-post.php">Single post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.php">Shop</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="single-product.php">Single product</a>
                                            </li>
                                            <li><a href="cart.php">Cart</a>
                                            </li>
                                            <li><a href="checkout.php">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contacts</a>
                                        <ul class="rd-navbar-dropdown">
                                            <li><a href="contacts-1.php">Contacts 1</a>
                                            </li>
                                            <li><a href="contacts-2.php">Contacts 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="rd-navbar-nav-footer">
                                    <ul class="inline-list inline-list-md">
                                        <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a>
                                        </li>
                                        <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-youtube" href="#"></a></li>
                                        <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a>
                                        </li>
                                    </ul>
                                </div>
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
