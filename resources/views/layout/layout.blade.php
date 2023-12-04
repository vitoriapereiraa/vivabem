<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Academia Viva Bem</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!--==============================
    All CSS File
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Fontawesome Icon -->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<!-- Slick Slider -->
<link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>
<body>


     <!--<nav>
        <ul>
           <li><a href="{{ url('/') }}">Home</a></li>
           <li><a href="{{ url('/sobre') }}">Sobre</a></li>
           <li><a href="{{ url('/modalidade') }}">modalidade</a></li>
           <li><a href="{{ url('/treino') }}">Treino</a></li>
           <li><a href="{{ url('/noticias') }}">Noticias</a></li>
           <li><a href="{{ url('/contato') }}">Contato</a></li>


        </ul>
     </nav> -->
    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader ">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget footer-widget">
                <div class="widget-about">
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="Fitmas"></a>
                    </div>
                    <p class="about-text">A gym, also known as a fitness center or health club, is a facility dedicated to physical fitness and exercise gyms and typically offer a range</p>
                    <div class="social-btn style2">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget widget_nav_menu footer-widget">
                <h3 class="widget_title">Quick Links</h3>
                <ul class="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="project-details.html">Our Mission</a></li>
                    <li><a href="team.html">Meet The Teams</a></li>
                    <li><a href="project.html">Our Projects</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html"><img src="assets/img/logo.svg" alt="Fitmas"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">sobre</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="index.html">Home 01</a>
                            </li>
                            <li>
                                <a href="home-2.html">Home 02</a>
                            </li>
                            <li>
                                <a href="home-3.html">Home 03</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">modalidades</a>
                        <ul class="sub-menu">
                            <li><a href="team.html">Team Page</a></li>
                            <li><a href="team-2.html">Team Page 02</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="gallery.html">Gallery Page</a></li>
                            <li><a href="gallery-2.html">Gallery Page 02</a></li>
                            <li><a href="project.html">Project Page</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="pricing.html">Pricing Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">treino</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">noticias</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-2.html">Blog 02</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Hero Area
    ==============================-->
    <div class="hero-wrapper hero-3" id="hero" data-bg-src="assets/img/academia.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="hero-style3">
                        <h1 class="hero-title text-white">REDEFINA SEUS LIMITES, ABRAÇE A JORNADA.</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appointment-form bg-white">
                        <h4 class="form-title">RESERVE O SEU LUGAR:</h4>
                        <form action="mail.php" method="POST" class="bmi-form ajax-contact">
                            <div class="form-group">
                                <input type="text" class="form-control style-border2" name="person" id="person" placeholder="1 Pessoa">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border2" name="date" id="date" placeholder="Data de início">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control style-border2" name="time" id="time" placeholder="Selecione a hora">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control style-border2" name="number" id="number" placeholder="Telefone">
                            </div>

                            <div class="form-btn col-12">
                                <button class="btn fw-bold style5 w-100">MAKE APPOINTMENT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
	Header Area
    ==============================-->
    <div class="nav-header header-layout3">
        <div class="sticky-wrapper2">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <button type="button" class="btn btn-border4 sideMenuToggler">
                                    <i class="far fa-bars"></i>
                                </button>
                                <button type="button" class="search-btn searchBoxToggler"><i class="fa-regular fa-magnifying-glass"></i>Search</button>
                            </div>
                        </div>
                        <div class="col-auto d-lg-none">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Home</a>

                                    </li>
                                    <li>
                                        <a href="about.html">sobre</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">treinos</a>

                                    </li>
                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-lg-block d-none">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="logo"></a>
                                <a class="sticky-logo" href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                                <span class="border-left"></span>
                                <span class="border-right"></span>
                            </div>
                        </div>
                        <div class="col-auto me-lg-auto d-none d-lg-inline-block">
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="/modalidade">modalidades</a>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">noticias</a>

                                    </li>
                                    <li>
                                        <a href="contact.html">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <a href="contact.html" class="btn btn-border4">
                                JOIN CLASS NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<main >
    @yield('conteudo')
</main>


    <body class="home-3">
        <!--********************************
               Code Start From Here
        ******************************** -->




        <!--==============================
         Preloader
        ==============================-->





<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer-1-bg.png">
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="widget-about">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logoVivaBem.svg" alt="Fitmas"></a>
                            </div>
                            <p class="about-text">Uma academia, também conhecida como centro de fitness ou clube de saúde, é uma instalação dedicada à preparação física e academias de ginástica e normalmente oferece uma variedade de</p>
                            <div class="social-btn">
                                <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Links rapidos</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="about.html">Sobre nós</a></li>
                                <li><a href="service-details.html">Nossa missão</a></li>
                                <li><a href="team.html">Conheça as equipes</a></li>
                                <li><a href="project.html">Nossos projetos</a></li>
                                <li><a href="contact.html">Contate-nos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Galeria</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="assets/img/academiainsta.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed1.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/insta2.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed2.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/insta-feed3.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed3.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/insta-feed4.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed4.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/insta-feed5.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed5.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="assets/img/widget/insta-feed6.png" alt="Gallery Image">
                                <a href="assets/img/widget/insta-feed6.png" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Receba boletim informativo</h3>
                        <p class="footer-text">Ganhe 10% de desconto no seu primeiro pedido! Se apresse</p>
                        <form class="newsletter-form">
                            <div class="form-group">
                                <i class="far fa-envelope"></i>
                                <input class="form-control" type="email" placeholder="Email Address" required="">
                            </div>
                            <button type="submit" class="btn style2">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto align-self-center"><p class="copyright-text text-center">© 2023 <a href="#">Fitmas.</a> All Rights Reserved.</p></div>
            </div>
        </div>
    </div>
</footer>




 <!-- Scroll To Top -->
 <div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
 <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
