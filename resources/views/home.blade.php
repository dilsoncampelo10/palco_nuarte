@extends('layouts.main')
@section('title','Home')
@section('content')

<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2 mb-5" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
    <div class="swiper-wrapper text-left">
        <div class="swiper-slide context-dark" data-slide-bg="{{asset('assets/images/100.png')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">

                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span></span><span class="font-weight-bold"> </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{asset('assets/images/8.png')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0"></h6>
                            <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span></span><span class="font-weight-bold"> </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination"></div>
</section>
<!-- Section Box Categories-->
<section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
                <div class="row justify-content-center">
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><a href="#"><img src="{{asset('assets/images/foto1.jpg')}}" alt="" width="368" height="420" /></a>
                                <h5 class="box-categories-title">Secamed</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><a href="#"><img src="{{asset('assets/images/foto2.jpg')}}" alt="" width="368" height="420" /></a>
                                <h5 class="box-categories-title">Mountain Holiday</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><a href="#"><img src="{{asset('assets/images/foto3.jpg')}}" alt="" width="368" height="420" /></a>
                                <h5 class="box-categories-title">Beach Holidays</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><a class="link-classic wow fadeInUp" href="#Galeria">Outras Fotos<span></span></a>
        <!-- Owl Carousel-->
    </div>
</section>
<!-- Logo-->
<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp"><img src="{{asset('assets/images/nuarte.jpg')}}" alt="" width="556" height="382" />
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                <div class="box-width-lg-470">
                    <h3>Nuarte</h3>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big tabs-line-style-2 text-center text-md-left" id="tabs-7">
                        <!-- Nav tabs-->
                        <ul class="nav nav-tabs">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-7-1" data-toggle="tab">Sobre</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-2" data-toggle="tab">Objetivos</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-7-3" data-toggle="tab">Atividades</a></li>
                        </ul>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-7-1">
                                <p>O Núcleo de Arte do campus Ipanguaçu faz parte da política ampliada do IFRN que promover reunir e contribuir para o rumo artístico e cultural, além disso os alunos que integram na educação profissional e técnica, promove atividades que possa contribuir significativamente para a comunidade local. </p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-2">
                                <p>Um dos principais objetivos divulgar e estimular a interação e a cooperação entre a arte e o meio urbano e utilizar atividades que envolvam diferentes linguagens artísticas para promover, discutir e expandir as atividades artísticas e culturais.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-3">
                                <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop for every travel service available in the industry.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="contact-us.html">Get in Touch</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--	Our Services-->
<section class="section section-sm">
    <div class="container">
        <h3>Formas Artisiticas</h3>
        <div class="row row-30">
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <i class="fa-regular fa-image-polaroid"></i>
                        </div>
                        <div class="unit-body">

                            <h5 class="box-icon-classic-title"><a href="#">Personalized Matching</a></h5>
                            <p class="box-icon-classic-text">Our unique matching system lets you find just the tour you want for your next holiday.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-circular220"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Fotografia</a></h5>
                            <p class="box-icon-classic-text">We offer a wide variety of personally picked tours with destinations all over the globe.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-favourites5"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Highly Qualified Service</a></h5>
                            <p class="box-icon-classic-text">Our tour managers are qualified, skilled, and friendly to bring you the best service.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-headphones32"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">24/7 Support</a></h5>
                            <p class="box-icon-classic-text">You can always get professional support from our staff 24/7 and ask any question you have.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-hot67"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Handpicked Hotels</a></h5>
                            <p class="box-icon-classic-text">Our team offers only the best selection of affordable and luxury hotels to our clients.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                        <div class="unit-left">
                            <div class="box-icon-classic-icon fl-bigmug-line-wallet26"></div>
                        </div>
                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Best Price Guarantee</a></h5>
                            <p class="box-icon-classic-text">If you find tours that are cheaper than ours, we will compensate the difference.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Hot tours-->
<section class="section section-sm bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Notícias Recentes</span></h3>
        <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/artistas1.jpg')}}" alt="" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Roda de Conversa!</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews" href="#">Caros alunos e servidores do Campus Ipanguaçu 💖 @ifrn_ipan!! Venham participar do segundo evento CONVERSA ENTRE ARTISTAS!!!

                                        Os nossos convidados dessa vez são os alunos do nosso IFRN-Campus Ipanguaçu e também artistas do Vale, Daniel Alves e Ricardo Melo. Vamos conversar e discutir variados assuntos. 🌹 O evento será na Sala de Música do Campus Ipanguaçu, AMANHÃ às 11:00 da manhã!!!!</a><a class="button button-black-outline button-ujarak" href="#">Acessar Notícia</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-12 wow fadeInLeft">
                <!-- Product Big-->
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/artistas2.jpg')}}" }} alt="" width=" 600" height="366" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Café, Cinema e Conversa</a></h5>
                                <p class="product-big-text">CAFÉ, CINEMA E CONVERSA ☕🎥

                                    O próximo café, cinema e conversa do mês de março já está agendado. Salvem o post e guardem a data!

                                    Já compartilha esse evento único de troca mutua de sabedoria, aguardamos todos você para partilhar esse momento incrível!

                                    A transmissão será neste link: https://www.youtube.com/watch?v=drBu0hzR50c</p><a class="button button-black-outline button-ujarak" href="#">Acessar Notícia</a>

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<!-- Coordenadores-->


<section class="section section-sm">
    <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Equipe</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Natalia-->
                <article class="team-modern">
                    <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{asset('assets/images/Natalia.jpg')}}" alt="" width="118" height="118" /></a>
                        <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                            <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="team-modern-caption">
                        <h6 class="team-modern-name"><a href="#">Nátalia Melo</a></h6>
                        <p class="team-modern-status">Coodernadora</p>
                        <h6 class="team-modern-phone"><a href="tel:#">Contato: 84 99801 - 0000</a></h6>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Aja-->
                <article class="team-modern">
                    <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="{{asset('assets/images/Aja.jpg')}}" alt="" width="118" height="118" /></a>
                        <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                            <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="team-modern-caption">
                        <h6 class="team-modern-name"><a href="#">Aja Góis</a></h6>
                        <p class="team-modern-status">Coordenadora</p>
                        <h6 class="team-modern-phone"><a href="tel:#">Contato: 84 99012 - 0000</a></h6>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Team Modern-->
                <article class="team-modern">
                    <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-3-118x118.jpg" alt="" width="118" height="118" /></a>
                        <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                            <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="team-modern-caption">
                        <h6 class="team-modern-name"><a href="#">Bolsista 1</a></h6>
                        <p class="team-modern-status">Tour Consultant</p>
                        <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Team Modern-->
                <article class="team-modern">
                    <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-4-118x118.jpg" alt="" width="118" height="118" /></a>
                        <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                            <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="team-modern-caption">
                        <h6 class="team-modern-name"><a href="#">Michele info 3</a></h6>
                        <p class="team-modern-status">PR Manager</p>
                        <h6 class="team-modern-phone"><a href="tel:#">+1 323-913-4688</a></h6>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--Capa Colorida-->
<section class="section bg-default text-center offset-top-50">
    <div class="parallax-container" data-parallax-img="{{asset('assets/images/colorido.jpg')}}">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
            <div class="container">
                <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold"></span><span class="d-block font-weight-light"></span></h2>
                <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s"></p>
            </div>
        </div>
    </div>
</section>
<!--	Galeria de Fotos-->
<section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
    <div class="container-fluid">
        <h2 class="gallery-title" id="Galeria">Galeria</h2>
        <!--imagem-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
            <!-- galeria1-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria1.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria01.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-1-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- galeria2-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria2.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria02.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-2-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria3.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria03.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-3-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria4.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria04.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-4-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria5.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria05.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-5-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria6.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria06.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-6-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="{{asset('assets/images/galeria7.jpg')}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{asset('assets/images/galeria07.jpg')}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-7-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
        </div>
    </div>
</section>

@endsection