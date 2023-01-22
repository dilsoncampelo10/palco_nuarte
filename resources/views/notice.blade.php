@extends('layouts.main')
@section('title','Notícias')

@section('content')

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">

        <div class="box-position" style="background-image: url(/assets/images/ARTISTASLOGO.png);"></div>
    </div>
</section>









<!-- Swiper Pagination-->
<div class="swiper-pagination"></div>
</section>

<section class="section section-sm bg-default">
    <div class="container">

        <div class="row row-sm row-40 row-md-50">
            <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/noti1.jpg')}}" alt="" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Oficina!</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews" href="#"> É amanhã teremos Oficina de Teatro com o professor Waltair na sala 46, não percam!!!</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/noti1 (2).jpg')}}" alt="" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Novo Artista no Ar!</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews" href="#">O projeto afim de promover visibilidade aos artistas está de volta, O NUARTE tem um grande prazer em divulgar trabalhos de artistas regionais, valorizamos a arte como a coisa mais preciosa do mundo. Lucas Silva é o nosso escolhido da semana a ter seus talentos compartilhados pelo NUARTE, vamos divulgar!!!
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-12 wow fadeInRight">
                <!-- Product Big-->
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/noti1 (3).jpg')}}" alt="" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Reunião!</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews" href="#">Registros da reunião e confraternização dos membros e bolsistas do Nuarte, realizado no Campus Ipanguaçu de forma presencial!!! 👏👏🎭🎨</a>
                                </div>


                            </div>
                        </div>
                    </div>
                </article>
            </div>
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

                                        Os nossos convidados dessa vez são os alunos do nosso IFRN-Campus Ipanguaçu e também artistas do Vale, Daniel Alves e Ricardo Melo. Vamos conversar e discutir variados assuntos. 🌹 O evento será na Sala de Música do Campus Ipanguaçu, AMANHÃ às 11:00 da manhã!!!!</a><a class="button button-black-outline button-ujarak" href="#">Visualizar Notícia</a>
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
                        <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{asset('assets/images/artistas2.jpg')}}" alt="" width="600" height="366" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#">Café, Cinema e Conversa</a></h5>
                                <p class="product-big-text">CAFÉ, CINEMA E CONVERSA ☕🎥

                                    O próximo café, cinema e conversa do mês de março já está agendado. Salvem o post e guardem a data!

                                    Já compartilha esse evento único de troca mutua de sabedoria, aguardamos todos você para partilhar esse momento incrível!

                                    A transmissão será neste link: https://www.youtube.com/watch?v=drBu0hzR50c</p><a class="button button-black-outline button-ujarak" href="#">Visualizar Notícia</a>

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection