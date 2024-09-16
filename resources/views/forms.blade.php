<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Forms</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,300italic,400,700%7CArvo:400,700">
    <link rel="stylesheet" href="css/style.css">
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
            <div class="page-header-left"><a class="brand" href="index.php"><img src="img/logo-default-dark-200x36.png" alt="" width="200" height="36"/></a></div>
            <div class="page-header-right">
              <div id="perspective-open-menu" data-custom-toggle=".perspective-menu-toggle" data-custom-toggle-hide-on-blur="true"><span class="perspective-menu-text">Menu</span>
                <button class="perspective-menu-toggle"><span></span></button>
              </div>
            </div>
          </div>
          <div id="wrapper">
            <div class="page-title">
              <div class="page-title-content">
                <div class="shell">
                  <p class="page-title-header">Forms</p>
                </div>
              </div>
            </div>
            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-10 cell-md-8 cell-lg-6">
                    <div class="inset-sm-25">
                      <h3>Login form</h3>
                      <div class="group-sm group-sm-justify group-middle">
                        <div class="btn btn-sm btn-facebook btn-icon btn-icon-left"><span class="icon fa fa-facebook"></span>Facebook</div>
                        <div class="btn btn-sm btn-twitter btn-icon btn-icon-left"><span class="icon fa fa-twitter"></span>Twitter</div>
                        <div class="btn btn-sm btn-google btn-icon btn-icon-left"><span class="icon fa fa-google-plus"></span>Google+</div>
                      </div>
                      <div class="text-decoration-lines"><span class="text-decoration-lines-content">or</span></div>
                      <!-- RD Mailform-->
                      <form class="rd-mailform">
                        <div class="form-group">
                          <label class="form-label-outside" for="login-email">E-mail</label>
                          <input class="form-control" id="login-email" type="email" name="email" data-constraints="@@Emailil @@Required">
                        </div>
                        <div class="form-group">
                          <label class="form-label-outside" for="login-email">Password</label>
                          <input class="form-control" id="login-password" type="password" name="pass" data-constraints="@@Required">
                        </div>
                        <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">sign in</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div class="divider divider-conch"></div>
            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-10 cell-md-10 cell-lg-6">
                    <h3>Contact Us</h3>
                    <!-- RD Mailform-->
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="range range-sm-bottom range-15">
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-first-name">First name</label>
                            <input class="form-control" id="contact-first-name" type="text" name="first-name" data-constraints="@@Required">
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-last-name">Last name</label>
                            <input class="form-control" id="contact-last-name" type="text" name="last-name" data-constraints="@@Required">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-message">Your Message</label>
                            <textarea class="form-control" id="contact-message" name="message" data-constraints="@@Required"></textarea>
                          </div>
                        </div>
                        <div class="cell-sm-6">
                          <div class="form-group">
                            <label class="form-label-outside" for="contact-email">E-mail</label>
                            <input class="form-control" id="contact-email" type="email" name="email" data-constraints="@@Emailil @@Required">
                          </div>
                        </div>
                        <div class="cell-sm-6 offset-custom-1">
                          <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">send message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <div class="divider divider-conch"></div>
            <section class="section-xl bg-periglacial-blue text-center">
              <div class="shell">
                <div class="range range-sm-center">
                  <div class="cell-sm-10 cell-md-6 cell-lg-4">
                    <h3>Contact Us</h3>
                    <!-- RD Mailform-->
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="range range-sm-bottom range-15">
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="captcha-first-name">Name</label>
                            <input class="form-control" id="captcha-first-name" type="text" name="first-name" data-constraints="@@Required">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="captcha-email">E-mail</label>
                            <input class="form-control" id="captcha-email" type="email" name="email" data-constraints="@@Emailil @@Required">
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group">
                            <label class="form-label-outside" for="captcha-message">Your Message</label>
                            <textarea class="form-control" id="captcha-message" name="message" data-constraints="@@Required"></textarea>
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <div class="form-group form-wrap-validation recaptcha-validation">
                            <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                          </div>
                        </div>
                        <div class="cell-xs-12">
                          <button class="btn btn-sm btn-primary btn-block btn-circle" type="submit">send message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <footer class="page-footer page-footer-default">
              <div class="shell">
                <div class="range range-xs-center">
                  <div class="cell-lg-10"><a class="brand" href="index.php"><img src="img/logo-default-dark-200x36.png" alt="" width="200" height="36"/></a>
                    <div class="text-highlighted-wrap">
                      <p class="text-highlighted">Barbershop is a No.1 place to have a men’s haircut in San Francisco. Here you can get luxury barber experience at a reasonable price.</p>
                    </div>
                    <ul class="footer-navigation footer-navigation-horizontal">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="blog.php">Blog</a></li>
                      <li><a href="shop.php">Shop</a></li>
                      <li><a href="contacts-1.php">Contacts</a></li>
                    </ul>
                    <div class="divider divider-small divider-light block-centered"></div>
                    <ul class="inline-list inline-list-md">
                      <li><a class="icon icon-xs link-gray-light fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-youtube" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-light fa-linkedin" href="#"></a></li>
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
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-sidebar" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-sidebar" data-stick-up-clone="false">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><img src="img/logo-default-dark-200x36.png" alt="" width="200" height="36"/></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-nav-inner">
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="index.php">Home</a>
                      <ul class="rd-navbar-megamenu">
                        <li>
                          <p class="rd-megamenu-header"><a href="index.php">Home</a></p>
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
                    <li><a href="about.php">About</a>
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
                      <li><a class="icon icon-xs link-gray-base fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-base fa-twitter" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-base fa-youtube" href="#"></a></li>
                      <li><a class="icon icon-xs link-gray-base fa-linkedin" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-secondary"><a class="btn btn-xs btn-circle btn-primary" href="step-1.php">BOOK NOW</a></div>
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
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>