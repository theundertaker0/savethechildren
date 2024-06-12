<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Save the Children</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">

    <!--====== Glide CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/tiny-slider.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/LineIcons.2.0.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap-5.0.0-beta1.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section id="home" class="header_area">
        <div id="header_navbar" class="header_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img id="logo" src="/vendor/adminlte/dist/img/savethechildrenLogo128x128.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#home">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#portfolio">Galería</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contáctanos</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        <div class="header_hero">
            <div class="single_hero bg_cover d-flex align-items-center" style="background-image: url({{asset('/images/hero.jpg')}})">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="hero_content text-center">
                                <h2 class="hero_title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">¡Bienvenido!</br>Save the Children</h2>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Tu solución al rastreo de personas por medio de dispositivos de geoposicionamiento.<br class="d-none d-xl-block"> Descubre todas las posibilidades que tenemos para cuidar de los tuyos.</p>
                                <a href="#features" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Explorar</a>
                            </div> <!-- hero content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single hero -->
        </div> <!-- header hero -->
    </section>

    <!--====== HEADER PART ENDS ======-->

    <!--====== FEATURES PART START ======-->

    <section id="features" class="features_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Porque escoger Save the Children</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Descubre las increibles funciones de geolocalización que ofrecemos para tu segurdad y la de los tuyos.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-layers"></i>
                        <h4 class="features_title">Bootstrap 5 Based</a></h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-layout"></i>
                        <h4 class="features_title">Clean Design</a></h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single_features text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.6s">
                        <i class="lni lni-bolt"></i>
                        <h4 class="features_title">Cutting-edge Features</a></h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="pt-130">
        <div class="about_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content pt-120 pb-130">
                            <div class="section_title pb">
                                <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">About Our
                                    Creative Proccess</h4>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Lorem ipsum dolor
                                    sit amet, consetetur sadipscing elitr, sed dianonumy eirmod tempor invidunt ut
                                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    dolores et erebum</p>
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.6s">Lorem ipsum dolor
                                    sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                    ut labore etdolore maali quyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                    dolores</p>
                            </div> <!-- section title -->
                            <a href="#0" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                                data-wow-delay="0.7s">Learn More</a>
                        </div> <!-- about content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->

            <div class="about_image bg_cover wow fadeInLeft" data-wow-duration="1.3s" data-wow-delay="0.2s"
                style="background-image: url(assets/images/about.jpg)">
                <div class="image_content">
                    <h4 class="experience"><span>5</span> Years of Experience</h4>
                </div>
            </div> <!-- about image -->
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== FEATURES PART START ======-->

    <section id="services" class="features_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Our Services</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Lorem ipsum dolor sit
                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-briefcase"></i>
                        <h4 class="features_title">Digital Business</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-clipboard"></i>
                        <h4 class="features_title">Startup Business</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-target-revenue"></i>
                        <h4 class="features_title">Business Investment</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <i class="lni lni-invention"></i>
                        <h4 class="features_title">Business Solutions2</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <i class="lni lni-bar-chart"></i>
                        <h4 class="features_title">Business Analysis</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_features text-center mt-60 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <i class="lni lni-calendar"></i>
                        <h4 class="features_title">Consulting Business</h4>
                        <p>Lorem ipsum dolor sit amet, sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore magna .</p>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== PORTFOLIO PART START ======-->

    <section id="portfolio" class="portfolio_area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-60">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Portafolio</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Estas son las capturas de algunas de las inclreibles funciones con las que contamos.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="portfolio_wrapper d-flex flex-wrap">
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                <img src="assets/images/portfolio-1.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Logo And Branding</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">
                <img src="assets/images/portfolio-2.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Bootstrap 5 Project</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                <img src="assets/images/portfolio-3.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Creative Projects</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                <img src="assets/images/portfolio-4.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">UI/UX Projects</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                <img src="assets/images/portfolio-5.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">App Development</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.3s">
                <img src="assets/images/portfolio-6.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Web Development</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">
                <img src="assets/images/portfolio-7.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Business Card Design</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
            <div class="single_portfolio wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                <img src="assets/images/portfolio-8.jpg" alt="portfolio">
                <div class="portfolio_content">
                    <ul class="meta">
                        <li><a href="#0"><i class="lni lni-link"></i></a></li>
                    </ul>
                    <h5 class="portfolio_title">Consulting Business</h5>
                </div> <!-- Single portfolio -->
            </div> <!-- portfolio wrapper -->
        </div> <!-- row -->
    </section>

    <!--====== PORTFOLIO PART ENDS ======-->

    <!--====== PRICING PART START ======-->

   {{--  <section id="pricing" class="pricing_area pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Pricing Plans</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Lorem ipsum dolor sit
                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labor dolore.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.2s">
                        <h4 class="pricing_title">Startup</h4>
                        <span class="price">$240</span>
                        <ul class="pricing_list">
                            <li>Startup Business</li>
                            <li>Business Consulting</li>
                            <li>Business Analysis</li>
                            <li>Corporate Business</li>
                            <li>Business Investment</li>
                        </ul>
                        <a href="#0" class="mian-btn">Order Now</a>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center mt-30 active wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.3s">
                        <h4 class="pricing_title">Agency</h4>
                        <span class="price">$340</span>
                        <ul class="pricing_list">
                            <li>Startup Business</li>
                            <li>Business Consulting</li>
                            <li>Business Analysis</li>
                            <li>Corporate Business</li>
                            <li>Business Investment</li>
                        </ul>
                        <a href="#0" class="mian-btn">Order Now</a>
                    </div> <!-- single pricing -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="1.3s"
                        data-wow-delay="0.4s">
                        <h4 class="pricing_title">Enterprise</h4>
                        <span class="price">$440</span>
                        <ul class="pricing_list">
                            <li>Startup Business</li>
                            <li>Business Consulting</li>
                            <li>Business Analysis</li>
                            <li>Corporate Business</li>
                            <li>Business Investment</li>
                        </ul>
                        <a href="#0" class="mian-btn">Order Now</a>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <!--====== PRICING PART ENDS ======-->





    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact_area bg_cover pt-120 pb-130" style="background-image: url({{asset('/images/contact_bg.jpg')}})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title section_title_2 text-center pb-25">
                        <h4 class="title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Contáctanos</h4>
                        <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.4s">Si tienes dudas o comentarios no dudes en comunicarte con nosotros y te contestaremos a la brevedad posible.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <form id="contact-form" action="assets/contact.php" method="post" class="wow fadeInUp"
                data-wow-duration="1.3s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Nombre" name="name" id="name" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Teléfono" name="number" id="number" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form">
                            <input type="text" placeholder="Asunto" name="subject" id="subject" required>
                        </div> <!-- single form -->
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form">
                            <textarea placeholder="Mensaje" name="message" id="message" required></textarea>
                        </div> <!-- single form -->
                    </div>

                    <p class="form-message"></p>

                    <div class="col-lg-12">
                        <div class="single_form text-center">
                            <button class="main-btn" type="submit">ENVIAR</button>
                        </div> <!-- single form -->
                    </div>
                </div> <!-- row -->
            </form>
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer_area">
        <div class="container">
            <div class="footer_wrapper text-center d-lg-flex align-items-center justify-content-between">
                <p class="credit">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                <div class="footer_social pt-15">
                    <ul>
                        <li><a href="#0"><i class="lni lni-facebook-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> <!-- footer social -->
            </div> <!-- footer wrapper -->
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Bootstrap js ======-->
    <script src="{{asset('/js/bootstrap.bundle-5.0.0-beta1.min.js')}}"></script>

    <!--====== glide js ======-->
    <script src="{{asset('/js/tiny-slider.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('/js/wow.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('/js/main.js')}}"></script>

</body>

</html>
