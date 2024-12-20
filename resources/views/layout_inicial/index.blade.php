<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Pagina inicial</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">
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
        <header class="page-header">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth"
                    data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="true" data-md-stick-up-offset="140px"
                    data-lg-stick-up-offset="140px">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a class="brand-name" href="{{ route('index') }}">
                                    <div class="brand-mobile"><img src="/assets/img/logo-default-dark-200x36.png"
                                            alt="" width="200" height="36" />
                                    </div>
                                    <div class="brand-desktop"><img src="/assets/img/logo-big-dark-125x125.png"
                                            alt="" width="125" height="125" />
                                    </div>
                                </a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li class="active"><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('sobre-barbeiros') }}">Sobre</a>
                                    </li>
                                    <li><a href="{{ route('servico') }}">serviços</a>
                                    </li>
                                    <li><a target="_blank" href="{{route('agendar')}}">Agendamento</a>
                                    </li>
                                    <li><a href="{{ route('login') }}">Login/Registrar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="jumbotron-custom jumbotron-custom-3 bg-white bg-image bg-image-custom bg-image-center"
            style="background-image: url(/assets/img/home-three-1-1920x800.jpg);">
            <div class="jumbotron-custom-content text-center">
                <div class="shell">
                    <div class="range range-sm-center">
                        <div class="cell-sm-9 cell-md-8 cell-lg-7">
                            <h1>Aproveite nossos serviços de barbeiro</h1>
                            <p class="large">Estabeleça um novo visual incrível com nossos serviços de barbeiro.</p><a
                                class="btn btn-style-1 btn-primary" href="{{route('agendar')}}">RESERVE AGORA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-xl bg-periglacial-blue text-center text-md-left">
            <div class="shell-fluid shell-condensed">
                <div class="range range-md-reverse range-xs-middle range-md-right range-50">
                    <div class="cell-md-5 cell-lg-4">
                        <div class="inset-1">
                            <h2>QUEM SOMOS</h2>
                            <div class="p text-width-smallest">
                                <p class="big">Barbershop é uma equipe de barbeiros altamente qualificados, dedicados
                                    a oferecer o melhor valor. Fazemos isso fornecendo serviços de salão de alta
                                    qualidade para homens e meninos, em uma atmosfera amigável.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-7 cell-lg-6">
                        <div class="row row-gutter-custom range-15">
                            <div class="col-xs-4">
                                <figure class="figure-fullwidth"><img src="/assets/img/about-1-300x460.jpg"
                                        alt="" width="300" height="460" />
                                </figure>
                            </div>
                            <div class="col-xs-4">
                                <figure class="figure-fullwidth"><img src="/assets/img/about-2-300x460.jpg"
                                        alt="" width="300" height="460" />
                                </figure>
                            </div>
                            <div class="col-xs-4">
                                <figure class="figure-fullwidth"><img src="/assets/img/about-3-300x460.jpg"
                                        alt="" width="300" height="460" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="shell-fluid shell-condensed">
                <div class="range range-condensed">
                    <div class="cell-md-6 cell-md-6-mod-1 image-wrap-left bg-white bg-image"
                        style="background-image: url(/assets/img/home-three-2-910x800.jpg);">
                        <div class="image-wrap-inner">
                            <h2>NOSSOS<br>SERVIÇOS</h2>
                            <p class="big">A Barbershop oferece cortes de cabelo masculinos de classe mundial,
                                cuidados com a barba e barbear com lâminas quentes. Aqui estão apenas alguns dos
                                serviços pelos quais somos famosos.</p><a class="btn btn-style-1 btn-primary"
                                href="{{ route('servico') }}">leia mais</a>
                        </div>
                    </div>
                    <div class="cell-md-6 cell-md-6-mod-2 image-wrap-right bg-gray-dark bg-image"
                        style="background-image: url(/assets/img/home-three-3-1011x800.jpg);">
                        <div class="image-wrap-inner">
                            <div class="range range-condensed range-inner-bordered">
                                <div class="cell-xs-6">
                                    <article class="box-icon">
                                        <figure class="box-icon-image"><img
                                                src="/assets/img/icon-service-light-3-70x62.png" alt=""
                                                width="70" height="62" />
                                        </figure>
                                        <p class="box-icon-header">Aparar BARBA</p>
                                        <p class="box-icon-text">Uma barba bem aparada é um elemento indispensável na
                                            imagem de todo homem</p>
                                    </article>
                                </div>
                                <div class="cell-xs-6">
                                    <article class="box-icon">
                                        <figure class="box-icon-image"><img
                                                src="/assets/img/icon-service-light-4-70x62.png" alt=""
                                                width="70" height="62" />
                                        </figure>
                                        <p class="box-icon-header">APARAR BIGODE</p>
                                        <p class="box-icon-text">Os bigodes também precisam ser aparados regularmente
                                        </p>
                                    </article>
                                </div>
                                <div class="cell-xs-6">
                                    <article class="box-icon">
                                        <figure class="box-icon-image"><img
                                                src="/assets/img/icon-service-light-1-70x62.png" alt=""
                                                width="70" height="62" />
                                        </figure>
                                        <p class="box-icon-header">CORTES DE CABELO TRADICIONAIS</p>
                                        <p class="box-icon-text">Um dos serviços mais populares que nossos barbeiros
                                            oferecem</p>
                                    </article>
                                </div>
                                <div class="cell-xs-6">
                                    <article class="box-icon">
                                        <figure class="box-icon-image"><img
                                                src="/assets/img/icon-service-light-2-70x62.png" alt=""
                                                width="70" height="62" />
                                        </figure>
                                        <p class="box-icon-header">BARBEAR</p>
                                        <p class="box-icon-text">Nossos serviços de barbear farão você ficar realmente
                                            bonito</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-xl bg-periglacial-blue text-center"></section>

        <section class="section-xl bg-gray-dark bg-image text-center"
            style="background-image: url(/assets/img/bg-image-1.jpg);">
            <div class="shell">
                <div class="range range-50">
                    <div class="cell-xs-12">
                        <h2>Nossos barbeiros</h2>
                        <div class="p text-width-medium">
                            <p class="big">Empregamos apenas barbeiros altamente qualificados que não são apenas
                                profissionais, mas também gostam de manter a atmosfera de uma barbearia clássica</p>
                        </div>
                    </div>
                    <div class="cell-xs-12">
                        <div class="range range-30">
                            <div class="cell-sm-6 cell-md-4 height-fill">
                                <div class="thumbnail-card"><img class="thumbnail-card-image"
                                        src="/assets/img/barbers-1-370x310.jpg" alt="" width="370"
                                        height="310" />
                                    <div class="thumbnail-card-body">
                                        <p class="thumbnail-card-header" data-toggle="modal"
                                            data-target="#modalWindow">Simon Wilson</p>
                                        <div class="thumbnail-card-text">
                                            <p>O Sr. Wilson é o fundador e proprietário da nossa barbearia.</p>
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
                </div>
            </div>
        </section>

        <!--<section class="section-lg bg-periglacial-blue text-center">
        <div class="shell">
          <div class="range range-sm-center range-75">
            <div class="cell-xs-12">
              <h2>latest blog posts</h2>
              <div class="p text-width-medium">
                <p class="big">Barbershop is not only a place where you can get a first-class haircut. Our barbers also write interesting articles on everything concerning their sphere of interest.</p>
              </div>
            </div>
            <div class="cell-xs-12">
              <div class="slick-slider carousel-center-mode" data-arrows="false" data-loop="true" data-dots="true" data-swipe="true" data-autoplay="false" data-items="1" data-lg-items="3" data-center-mode="true" data-center-padding="0.0">
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="img/blog-1-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.php">Visiting a Barber</a></p>
                        <div class="post-classic-text">
                          <p>A barber knows how to cut men’s hair. If you’re like most men these days, you’re probably going to some unisex chain salon. Most of the time, you’d walk out of these places with an average haircut. Sometimes...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.php">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="img/blog-2-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.php">What Haircut Suits You</a></p>
                        <div class="post-classic-text">
                          <p>Different people have different face shapes. And not you, but your face shape decides will this haircut suit you or not. The Barbershop has prepared some advice for you, how to choose a proper haircut for...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.php">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="img/blog-3-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.php">Top 7 Shaving Products</a></p>
                        <div class="post-classic-text">
                          <p>The right shaving cream can make the difference between a healthy skin and one plagued by ingrown hairs, razor burns, irritation, and a variety of other issues that arise from nicks and cuts. In the times of old, people used soap when shaving and although there are still plenty of...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.php">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="item">
                  <div class="slick-slide-inner">
                    <article class="post-classic"><img class="post-classic-image" src="img/blog-2-770x330.jpg" alt="" width="770" height="330"/>
                      <div class="post-classic-body">
                        <p class="post-classic-title"><a href="single-post.php">Visiting a Barber</a></p>
                        <div class="post-classic-text">
                          <p>A barber knows how to cut men’s hair. If you’re like most men these days, you’re probably going to some unisex chain salon. Most of the time, you’d walk out of these places with an average haircut. Sometimes...</p>
                        </div>
                        <div class="post-classic-footer">
                          <div class="post-classic-footer-left"><a class="btn btn-xs btn-primary btn-circle" href="single-post.php">READ MORE</a></div>
                          <div class="post-classic-footer-right">
                            <ul class="post-classic-meta">
                              <li><span class="icon icon-xxs icon-primary fa fa-heart"></span><span>24</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-eye"></span><span>132</span></li>
                              <li><span class="icon icon-xxs icon-primary fa fa-calendar-plus-o"></span>
                                <time datetime="2017-08-26">26.08.2017</time>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

        <!--<section class="box-wrap box-wrap-md bg-white">
        <div class="box-wrap-map">
          <div class="rd-google-map rd-google-map__model" data-zoom="14" data-x="-74.0150000" data-y="40.643180">
            <ul class="map_locations"></ul>
          </div>
        </div>
        <div class="box-wrap-content">
          <div class="shell">
            <div class="range">
              <div class="cell-xs-12">
                <div class="box-contacts box-contacts-horizontal box-wrap-content-interactive block-right">
                  <div class="box-contacts-col">
                    <div class="box-contacts-block">
                      <h3>Address</h3>
                      <address>123 Street W, Seattle WA 99999 United States</address>
                    </div>
                    <div class="divider divider-nebula"></div>
                    <div class="box-contacts-block">
                      <h3>Opening Hours</h3>
                      <dl class="box-contacts-terms-list">
                        <dt>Monday – Friday</dt>
                        <dd>9am - 6pm</dd>
                        <dt>Saturday and Sunday</dt>
                        <dd>10am - 4pm</dd>
                      </dl>
                    </div>
                  </div>
                  <div class="box-contacts-col box-contacts-right">
                    <div class="box-contacts-block">
                      <h3>Get In Touch</h3>
                      <p>Leave your name and phone number, and we’ll contact you.</p>
                      <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                        <div class="form-group">
                          <label class="form-label-outside" for="contact-full-name">Full Name</label>
                          <input class="form-control" id="contact-full-name" type="text" name="name" data-constraints="@@Required">

                        </div>
                        <div class="form-group">
                          <label class="form-label-outside" for="contact-phone">Telephone</label>
                          <input class="form-control" id="contact-phone" type="text" name="phone" data-constraints="@@Required @@Numeric">
                        </div>
                        <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">SEND REQUEST</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

        <footer class="page-footer page-footer-variant-3">
            <div class="shell">
                <div class="range range-50">
                    <div class="cell-sm-6 cell-md-4">
                        <!--<h3>Pages</h3>
                        <div class="divider divider-conch"></div>
                        <ul class="footer-navigation row footer-navigation-vertical" style="max-width: 390px;">
                            <li class="col-xs-6"><a href="index.php">Home</a></li>
                            <li class="col-xs-6"><a href="blog.php">Blog</a></li>
                            <li class="col-xs-6"><a href="about.php">About</a></li>
                            <li class="col-xs-6"><a href="shop.php">Shop</a></li>
                            <li class="col-xs-6"><a href="services.php">Services</a></li>
                            <li class="col-xs-6"><a href="contacts-1.php">Contacts</a></li>
                        </ul> -->
                    </div>
                    <div class="cell-sm-6 cell-md-5">
                        <h3>Descrição</h3>
                        <div class="divider divider-conch"></div>
                        <div class="text-highlighted-wrap">
                            <p class="text-highlighted">Barbershop é o lugar número 1 para corte de cabelo masculino em
                                São Francisco. Aqui você pode ter uma experiência de barbeiro de luxo a um preço
                                razoável.</p>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-3">
                        <h3>Follow Us</h3>
                        <div class="divider divider-conch"></div>
                        <ul class="inline-list inline-list-xs">
                            <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-facebook"
                                    href="#"></a></li>
                            <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-twitter"
                                    href="#"></a></li>
                            <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-youtube"
                                    href="#"></a></li>
                            <li><a class="icon icon-xs-outline icon-wild-sand-filled icon-circle fa-linkedin"
                                    href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade text-center" id="modalWindow" role="dialog">
        <div class="modal-dialog custom-modal-dialog">
            <div class="custom-modal-content">
                <button class="close" type="button" data-dismiss="modal"></button>
                <div class="shell">
                    <div class="box-portfolio"><img class="box-portfolio-image"
                            src="/assets/img/barbers-single-1-130x130.jpg" alt="" width="130"
                            height="130" />
                        <p class="box-portfolio-header">simon wilson</p>
                        <div class="box-portfolio-text">
                            <p>Simon Wilson founded Barbershop in 2003 at the age of 23. He decided to establish a place
                                where the long standing traditions of American barbering could be saved. He kept
                                Barbershop a true place for men, their fathers, and sons, rather than converting it to a
                                unisex salon as was the popular trend at the time. Over the past 13 years, Mr. Wilson
                                has grown his shop from a small, local spot to a nationally and internationally
                                recognized standard in the industry. Simon has been the recipient of various accolades
                                including the HYPE Award for Entrepreneurs and the Hartford Business Journal's 40 Under
                                Forty (Class of 2014). He can be found at the shop on Wednesdays and Fridays.</p>
                        </div>
                        <ul class="inline-list inline-list-md">
                            <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
