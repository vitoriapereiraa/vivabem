@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

  <!--==============================
    feature Area
    ==============================-->
    <div class="feature-area-2 space text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area">
                        <span class="sub-title style2">Our Features</span>
                        <h2 class="sec-title fw-bold">BEM-VINDO À NOSSA ACADEMIA E ESTÚDIO DE FITNESS</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-40">
                <div class="col-lg-4">
                    <div class="feature-card2">
                        <div class="feature-card_img">
                            <img src="assets/img/fit.png" alt="img">
                            <a href="service-details.html" class="feature-card_icon">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>


                        <h4 class="feature-card_title"><a href="service-details.html">Sem contrato de longo prazo</a></h4>
                        <p class="feature-card_text">Estamos orgulhosos de oferecer uma adesão à academia sem contrato de longo prazo.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card2">
                        <div class="feature-card_img">
                            <img src="assets/img/peso.png" alt="img">
                            <a href="service-details.html" class="feature-card_icon">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <h4 class="feature-card_title"><a href="service-details.html">Os melhores equipamentos</a></h4>
                        <p class="feature-card_text">Estamos orgulhosos de oferecer uma adesão à academia sem contrato de longo prazo.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card2">
                        <div class="feature-card_img">
                            <img src="assets/img/pessoa.png" alt="img">
                            <a href="service-details.html" class="feature-card_icon">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <h4 class="feature-card_title"><a href="service-details.html">Seu aplicativo exclusivo de academia</a></h4>
                        <p class="feature-card_text">Estamos orgulhosos de oferecer uma adesão à academia sem contrato de longo prazo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="space" data-bg-src="assets/img/bg/about3-bg.png">
        <div class="container">
            <div class="row gy-80">
                <div class="col-xl-6 order-xl-2">
                    <div class="about-thumb-2">
                        <img class="about-img-1" src="assets/img/treino.png" alt="img">
                        <div class="about-thumb-num">
                            01
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="about-content-wrap me-xl-4 mb-xl-0 mb-40">
                        <div class="title-area mb-0">
                            <span class="sub-title style2">Nossos Beneficios</span>
                            <h2 class="sec-title fw-bold text-white">Desbloqueie seu potencial, liberte sua grandeza.</h2>
                            <p class="sec-text mb-10">Defina seus objetivos específicos de musculação. Determine o que você deseja alcançar em termos de tamanho muscular, força e aparência física geral. Estabeleça metas realistas e mensuráveis que orientarão seu plano de treino e nutrição. Implemente os princípios de sobrecarga progressiva em seu treinamento.</p>
                            <a class="btn style3" href="about.html">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 order-xl-3">
                    <div class="about-thumb-2 style2">
                        <img class="about-img-1" src="assets/img/acad.png" alt="img">
                        <div class="about-thumb-num">
                            02
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 order-xl-4">
                    <div class="about-content-wrap ms-xl-4">
                        <div class="title-area mb-0">
                            <span class="sub-title style2">Students BENEFITS</span>
                            <h2 class="sec-title fw-bold text-white">GANHE 50% DE DESCONTO NO SEU PRIMEIRO PLANO DE ACADEMIA</h2>
                            <p class="sec-text mb-10">Dê atenção à sua nutrição e consuma uma dieta equilibrada que apoie o crescimento e a recuperação muscular. Concentre-se em consumir proteínas suficientes para fornecer os blocos de construção necessários para a reparação e o crescimento muscular</p>
                            <div class="checklist">
                                <h6 class="checklist-title text-white fw-semibold">Fitmas Special Services:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><i class="far fa-circle-check"></i>Soluções de emergência a qualquer hora</li>
                                            <li><i class="far fa-circle-check"></i>Preço acessível até 2 anos</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><i class="far fa-circle-check"></i>Soluções de emergência a qualquer hora</li>
                                            <li><i class="far fa-circle-check"></i>Equipe confiável e experiente</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a class="btn style3" href="about.html">MAKE AN APPOINTMENT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--==============================
    Counter Area
    ==============================-->
    <div class="counter-area-3 space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-card style3" data-bg-src="assets/img/bg/counter-card-bg.png">
                        <div class="media-body">
                            <div class="counter-circle">
                                <div class="progressbar">
                                    <div class="circle" data-percent="75">
                                        <div class="circle-num">75%</div>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-card_text">SERVIÇO DE QUALIDADE</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-card style3" data-bg-src="assets/img/bg/counter-card-bg.png">
                        <div class="media-body">
                            <div class="counter-circle">
                                <div class="progressbar">
                                    <div class="circle" data-percent="55">
                                        <div class="circle-num">55%</div>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-card_text">MEMBROS HABILIDOSOS</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="counter-card style3" data-bg-src="assets/img/bg/counter-card-bg.png">
                        <div class="media-body">
                            <div class="counter-circle">
                                <div class="progressbar">
                                    <div class="circle" data-percent="85">
                                        <div class="circle-num">85%</div>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-card_text">CLIENTES SATISFEITOS</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="counter-card style3" data-bg-src="assets/img/bg/counter-card-bg.png">
                        <div class="media-body">
                            <div class="counter-circle">
                                <div class="progressbar">
                                    <div class="circle" data-percent="35">
                                        <div class="circle-num">35%</div>
                                    </div>
                                </div>
                            </div>
                            <p class="counter-card_text">FRACASSOS DE PROJETO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Feature Area 3
    ==============================-->
    <div class="feature-area-3 space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area">
                <span class="sub-title style2">Our Features</span>
                <h2 class="sec-title fw-bold">POR QUE VOCÊ DEVERIA CONFIAR EM NÓS</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="feature-tab-button">
                        <div class="filter-menu-active">
                            <button data-filter=".cat1" class="active" type="button">ONDE FICA A SUA ACADEMIA? <i class="fas fa-circle-arrow-right"></i></button>
                            <button data-filter=".cat2" type="button">EXISTEM INSTALAÇÕES DE ARMÁRIOS DISPONÍVEIS?<i class="fas fa-circle-arrow-right"></i></button>
                            <button data-filter=".cat3" type="button">HÁ ESTACIONAMENTO NA ACADEMIA?<i class="fas fa-circle-arrow-right"></i></button>
                            <button data-filter=".cat4" type="button">COMO FAÇO PARA ME INSCREVER PARA UMA ASSINATURA?<i class="fas fa-circle-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="feature-tab-content filter-active-cat1 mt-xl-0 mt-40">
                        <div class="filter-item cat1">
                            <div class="tab-thumb">
                                <img src="assets/img/homem.png" alt="img">
                            </div>
                            <div class="tab-content mt-n1">
                                <p class="mt-n1"><span class="text-title">Interação em rede de convergência holística antes de tecnologias investidas em equidade se mesclarem com estratégias de crescimento em conformidade com padrões e cadeias de suprimentos táticas.</p>
                                <p class="mb-0">Impactar produtos por meio de produtos fabricados amigáveis ao usuário, aproveitando o baixo risco e alto rendimento.</p>
                                <div class="tab-content_grid">
                                    <div class="media-left">
                                        <h6 class="tab-content_grid-title">Inicio de jornada</h6>
                                        <span class="counter-number">1986</span>
                                    </div>
                                    <div class="media-body">
                                        <div class="checklist">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                                <li><i class="far fa-circle-check"></i>Affordable price upto 2 years</li>
                                                <li><i class="far fa-circle-check"></i>Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item cat2">
                            <div class="tab-thumb">
                                <img src="assets/img/treinando.png" alt="img">
                            </div>
                            <div class="tab-content mt-n1">
                                <p class="mt-n1"><span class="text-title">Interação em rede de convergência holística antes de tecnologias investidas em equidade se mesclarem com estratégias de crescimento em conformidade com padrões e cadeias de suprimentos táticas.</p>
                                <p class="mb-0">Impactar produtos por meio de produtos fabricados amigáveis ao usuário, aproveitando o baixo risco e alto rendimento.</p>
                                <div class="tab-content_grid">
                                    <div class="media-left">
                                        <h6 class="tab-content_grid-title">Inicio de jornada</h6>
                                        <span class="counter-number">1986</span>
                                    </div>
                                    <div class="media-body">
                                        <div class="checklist">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                                <li><i class="far fa-circle-check"></i>Affordable price upto 2 years</li>
                                                <li><i class="far fa-circle-check"></i>Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item cat3">
                            <div class="tab-thumb">
                                <img src="assets/img/mulhertreinando.png" alt="img">
                            </div>
                            <div class="tab-content mt-n1">
                                <p class="mt-n1"><span class="text-title">Interação em rede de convergência holística antes de tecnologias investidas em equidade se mesclarem com estratégias de crescimento em conformidade com padrões e cadeias de suprimentos táticas.</p>
                                <p class="mb-0">Impactar produtos por meio de produtos fabricados amigáveis ao usuário, aproveitando o baixo risco e alto rendimento.</p>
                                <div class="tab-content_grid">
                                    <div class="media-left">
                                        <h6 class="tab-content_grid-title">Inicio de jornada</h6>
                                        <span class="counter-number">1986</span>
                                    </div>
                                    <div class="media-body">
                                        <div class="checklist">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                                <li><i class="far fa-circle-check"></i>Affordable price upto 2 years</li>
                                                <li><i class="far fa-circle-check"></i>Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item cat4">
                            <div class="tab-thumb">
                                <img src="assets/img/barraacademia.png" alt="img">
                            </div>
                            <div class="tab-content mt-n1">
                                <p class="mt-n1"><span class="text-title">Interação em rede de convergência holística antes de tecnologias investidas em equidade se mesclarem com estratégias de crescimento em conformidade com padrões e cadeias de suprimentos táticas.</p>
                                <p class="mb-0">Impactar produtos por meio de produtos fabricados amigáveis ao usuário, aproveitando o baixo risco e alto rendimento.</p>
                                <div class="tab-content_grid">
                                    <div class="media-left">
                                        <h6 class="tab-content_grid-title">Inicio de jornada</h6>
                                        <span class="counter-number">1986</span>
                                    </div>
                                    <div class="media-body">
                                        <div class="checklist">
                                            <ul>
                                                <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                                <li><i class="far fa-circle-check"></i>Affordable price upto 2 years</li>
                                                <li><i class="far fa-circle-check"></i>Reliable & Experienced Team</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--==============================
    Testimonial Area 02
    ==============================-->
    <div class="testimonial-area-2 space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title style2">FEEDBACKS DOS ESTUDANTES</span>
                        <h2 class="sec-title fw-bold">O QUE ESTÃO DIZENDO SOBRE NÓS.</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testi-box-wrap2 text-center">
                        <div class="row global-carousel testi-slider-2" id="testiSlider2" data-slide-show="1">
                            <div class="col-lg-6">
                                <div class="testi-box style2">
                                    <div class="testi-box_thumb">
                                        <img src="assets/img/fitness.png" alt="img">
                                    </div>
                                    <div class="testi-box_content">
                                        <p class="testi-box_text">"Recentemente, iniciei minha jornada fitness, e a Fitmas tem sido fundamental para me ajudar a alcançar meus objetivos. Os instrutores são incrivelmente solidários e compreensivos em relação às minhas limitações."</p>
                                    </div>
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name">By David Smith</h4>
                                        <span class="testi-box_desig">Boxing Student</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testi-box style2">
                                    <div class="testi-box_thumb">
                                        <img src="assets/img/fitness.png" alt="img">
                                    </div>
                                    <div class="testi-box_content">
                                        <p class="testi-box_text">"Recentemente, iniciei minha jornada fitness, e a Fitmas tem sido fundamental para me ajudar a alcançar meus objetivos. Os instrutores são incrivelmente solidários e compreensivos em relação às minhas limitações."</p>
                                    </div>
                                    <div class="testi-box_profile">
                                        <h4 class="testi-box_name">By David Smith</h4>
                                        <span class="testi-box_desig">Boxing Student</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testi-arrow">
                            <button data-slick-prev="#testiSlider2" class="slick-arrow slick-prev"><i class="fa-light fa-arrow-left"></i></button>
                            <button data-slick-next="#testiSlider2" class="slick-arrow slick-next"><i class="fa-light fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Portfolio Area
    ==============================-->
    <div class="portfolio-area-2 space-top" data-bg-src="assets/img/bg/portfolio-bg-2.png">
        <div class="container">
            <div class="title-area">
                <h3 class="sub-title style2">Nossos Recursos</h3>
                <h2 class="sec-title fw-bold text-white">FOTOS DA GALERIA</h2>
            </div>
        </div>
        <div class="container-fluid px-15">
            <div class="row global-carousel portfolio-slider2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="false">
                <div class="col-md-6 col-xl-4">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="assets/img/academiagaleria3.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/galeriacad1.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/galeriacad2.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/galeriacad4.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card">
                        <div class="project-img">
                            <img src="assets/img/academiagaleria5.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/pesos1.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/academiagaleria2.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="project-card style2">
                        <div class="project-img">
                            <img src="assets/img/academiagaleria4.png" alt="project image">
                        </div>
                        <div class="project-content">
                            <h6 class="project-subtitle">Premier Logistics</h6>
                            <h4 class="project-title"><a href="project-details.html" tabindex="-1">porta para pacote rápido</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==============================
    Goal Area
    ==============================-->
    <section class="goal-area space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="goal-thumb-3 mb-40 mb-xl-0 me-xl-5">
                        <div class="img-1">
                            <img src="assets/img/fotoacademia.png" alt="img">
                        </div>
                        <div class="wcu-grid style2 movingX">
                            <div class="icon">
                                <img src="assets/img/icon/wcu-icon_1-1.svg" alt="img">
                            </div>
                            <div class="details">
                                <h3 class="wcu-grid_year"><span class="counter-number">25</span>+</h3>
                                <span class="wcu-grid_text">Years Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="title-area">
                        <span class="sub-title style2">Fitmas Goal
                        </span>
                        <h2 class="sec-title fw-bold">DESBLOQUEIE TODO O SEU POTENCIAL, ALCANCE SEUS OBJETIVOS DE FITNESS.</h2>
                    </div>
                    <div class="goal-grid-wrap">
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-1.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Treinamento físico gratuito</h4>
                                <p class="about-grid_text">Pedale até se exercitar em nosso estúdio especializado em ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="assets/img/icon/goal-icon_1-2.svg" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Cardio e Força</h4>
                                <p class="about-grid_text">Pedale até se exercitar em nosso estúdio especializado em ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn style6" href="service-details.html">SAIBA MAIS</a>
                            <a class="btn btn-border4" href="service-details.html">VIEW SERVICES</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="blog-area-3 space" data-bg-src="assets/img/bg/blog3-bg.png">
        <div class="blog-bg-thumb shape-mockup img-half img-right">
            <img src="assets/img/academia2.png" alt="img">
        </div>
        <div class="container">
            <div class="title-area">
                <span class="sub-title style2">Fitmas Goal
                </span>
                <h2 class="sec-title fw-bold text-white">LATEST BLOG INSIGHTS</h2>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="blog-card style3">
                        <div class="blog-date">
                            <span>02</span>AUG
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">
                                Fitness Health
                            </span>
                            <h3 class="blog-title box-title"><a href="blog-details.html">O blog fitness de academia mais tradicional de 2023 está aqui para sua programação</a></h3>
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-user"></i> Post by: Admin</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card style3">
                        <div class="blog-date">
                            <span>02</span>AUG
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">
                                Fitness Health
                            </span>
                            <h3 class="blog-title box-title"><a href="blog-details.html">O blog fitness de academia mais tradicional de 2023 está aqui para sua programação</a></h3>
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-user"></i> Post by: Admin</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card style3">
                        <div class="blog-date">
                            <span>02</span>AUG
                        </div>
                        <div class="blog-content">
                            <span class="blog-category">
                                Fitness Health
                            </span>
                            <h3 class="blog-title box-title"><a href="blog-details.html">O blog fitness de academia mais tradicional de 2023 está aqui para sua programação</a></h3>
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-user"></i> Post by: Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Goal area 02
    ==============================-->
    <div class="goal-area-2 space">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 align-self-center order-xl-2">
                    <div class="goal-thumb-4 mb-xl-0 mb-40">
                        <img src="assets/img/imagemacademia.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="title-area">
                        <span class="sub-title style2">Fitmas Goal</span>
                        <h2 class="sec-title fw-bold">PODEMOS DAR UMA FORMA AO SEU CORPO AQUI!</h2>
                        <p class="sec-text">Nossa equipe de treinadores experientes e certificados se dedica a orientar e apoiar você durante sua jornada de fitness. Entendemos que a jornada de preparação física de cada pessoa é única.</p>
                        <div class="about-grid-wrap style2 mt-40">
                            <div class="about-grid style4">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-1.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_counter"><span class="counter-number">1500</span>+</h4>
                                    <p class="about-grid_text">PESSOAS TREINADAS</p>
                                </div>
                            </div>
                            <div class="about-grid style4">
                                <div class="about-grid_icon">
                                    <img src="assets/img/icon/wcu-icon_2-2.svg" alt="img">
                                </div>
                                <div class="about-grid_content">
                                    <h4 class="about-grid_counter"><span class="counter-number">1500</span>+</h4>
                                    <p class="about-grid_text">EQUIPAMENTO MODERNO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap style2 mt-50">
                        <a href="about.html" class="btn style6">MAKE AN APPOINTMENT</a>
                        <div class="about-info-wrap style2">
                            <div class="icon bg-white"><i class="fas fa-phone"></i></div>
                            <div class="details">
                                <p class="about-info-title">Need Help?</p>
                                <a class="about-info-link" href="tel:+25825692582">+236-3256.21456</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    contact area
    ==============================-->
    <div class="contact-area">
        <div class="container">
            <div class="contact-card style2">
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Gym Location</p>
                        <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                    </div>
                </div>
                <div class="info-card style2" data-bg-src="assets/img/bg/contact-card-bg.png">
                    <h6 class="info-card_title">

                           SIGA-NOS AGORA


                    </h6>
                    <div class="info-card_content">
                        <div class="social-btn">
                            <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">NÚMERO DE TELEFONE</p>
                        <a href="tel:+18925382145" class="info-card_link">(11) 2538-2145</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>



@endsection
