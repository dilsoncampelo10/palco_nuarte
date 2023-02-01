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

    <div class="swiper-pagination"></div>
</section>

<section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
                <div class="row justify-content-center">
                    @for($i=0;$i<=2;$i++)
                    <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                        <ul class="list-marked-2 box-categories-list">
                            <li><a href="#"><img src="/assets/notices/{{$notices[$i]->image}}" alt="" width="368" height="420" /></a>
                                <h5 class="box-categories-title" style="color: black;">{{$notices[$i]->title}}</h5>
                            </li>
                        </ul>
                    </div>
                    @endfor
                    
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
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{route('contact')}}">Entre em contato</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-2">
                                <p>Um dos principais objetivos divulgar e estimular a interação e a cooperação entre a arte e o meio urbano e utilizar atividades que envolvam diferentes linguagens artísticas para promover, discutir e expandir as atividades artísticas e culturais.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{route('contact')}}">Entre em contato</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                            <div class="tab-pane fade" id="tabs-7-3">
                                <p>Our mission is to provide the ultimate travel planning experience while becoming a one-stop shop for every travel service available in the industry.</p>
                                <div class="group-md group-middle"><a class="button button-secondary button-pipaluk" href="{{route('contact')}}">Entre em contato</a><a class="button button-black-outline button-md" href="about.html">Saiba Mais</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

                            <h5 class="box-icon-classic-title"><a href="#">Cinema</a></h5>
                            <p class="box-icon-classic-text">Com a sétima arte é possível acompanhar histórias incríveis e obter experiências que jamais vivemos.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">

                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Fotografia</a></h5>
                            <p class="box-icon-classic-text">Com a fotografia é possível reinventar imagens do nosso cotidiano.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">

                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Desenho</a></h5>
                            <p class="box-icon-classic-text">O desenho é uma forma manual de expressar nossos sentimentos rabiscando</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">

                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Dança</a></h5>
                            <p class="box-icon-classic-text">A movimentação do nosso corpo por meio do rítmo é o que expressa quem nós somos.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">

                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#"> Música</a></h5>
                            <p class="box-icon-classic-text">Através da combinação de tons podemos criar uma melodia incrível.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">

                        <div class="unit-body">
                            <h5 class="box-icon-classic-title"><a href="#">Teatro</a></h5>
                            <p class="box-icon-classic-text">Feliz ou triste? Por meio do teatro acopanhamos grande dramas ao vivo!</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section section-sm bg-default">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Notícias Recentes</span></h3>
        <div class="row row-sm row-40 row-md-50">
            @for($i=0;$i<=1;$i++)
            <div class="col-sm-6 col-md-12 wow fadeInRight">
              
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" ><img src="/assets/notices/{{$recentNotices[$i]->image}}" alt="" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a>{{$recentNotices[$i]->title}}</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews">
                                    {{$recentNotices[$i]->description}}
                                      </a><a class="button button-black-outline button-ujarak" href="{{route('notice')}}">Acessar Notícia</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endfor
            
        </div>
    </div>
</section>


<!-- Coordenadores-->


<section class="section section-sm">
    <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Equipe</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
            @foreach($artists as $artist)
            <div class="col-sm-6 col-md-5 col-lg-3">
                <!-- Natalia-->
                <article class="team-modern">
                    <div class="team-modern-header"><a class="team-modern-figure"><img class="img-circles" src="/assets/artists/photos/{{$artist->photo}}" alt="{{$artist->name}}" width="118" height="118" /></a>
                        <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                            <g>
                                <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="team-modern-caption">
                        <h6 class="team-modern-name"><a href="#">{{$artist->name}}</a></h6>
                        <p class="team-modern-status">{{$artist->function}}</p>
                        <h6 class="team-modern-phone"><a href="tel:#">Contato: {{$artist->contact}}</a></h6>
                    </div>
                </article>
            </div>
            @endforeach
            
          
           
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
            <!-- galeria-->
            @foreach($galleries as $gallery)
            <article class="thumbnail thumbnail-mary">
                <div class="thumbnail-mary-figure"><img src="/assets/gallery/{{$gallery->image}}" alt="" width="270" height="195" />
                </div>
                <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="/assets/gallery/{{$gallery->image}}" data-lightgallery="item"><img src="{{asset('assets/images/gallery-image-1-270x195.jpg')}}" alt="" width="270" height="195" /></a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection