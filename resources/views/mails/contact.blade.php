@extends('layouts.main')
@section('title','Página de contato')
@section('content')

<section class="section section-fluid">
    <div class="google-map-container" data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker.png" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFBB00&quot;},{&quot;saturation&quot;:43.400000000000006},{&quot;lightness&quot;:37.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFC200&quot;},{&quot;saturation&quot;:-61.8},{&quot;lightness&quot;:45.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51.19999999999999},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:52},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#0078FF&quot;},{&quot;saturation&quot;:-13.200000000000003},{&quot;lightness&quot;:2.4000000000000057},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00FF6A&quot;},{&quot;saturation&quot;:-1.0989010989011234},{&quot;lightness&quot;:11.200000000000017},{&quot;gamma&quot;:1}]}]">
        <div class="google-map"></div>
        <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
        </ul>
    </div>
</section>

<!-- Contact information-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <i class="fa-brands fa-instagram" style="font-size: 50px;"></i>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="https://www.instagram.com/nuarteip/" target="_blank">@nuarteip</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <i class="fa-solid fa-location-dot" style="font-size: 50px;"></i>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="https://portal.ifrn.edu.br/campus/ipanguacu" target="_blank">IFRN - Campus Ipanguaçu</a></p>
                    </div>
                </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
                <article class="box-contacts">
                    <div class="box-contacts-body">
                        <i class="fa-solid fa-envelope" style="font-size: 50px;"></i>
                        <div class="box-contacts-decor"></div>
                        <p class="box-contacts-link"><a href="mailto:nuarteip.ifrn.edu.br">nuarteip.ifrn.edu.br</a></p>
                        <!-- <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p> -->
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form-->
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <article class="title-classic">
            <div class="title-classic-title">
                <h3>Fale conosco</h3>
            </div>
            <div class="title-classic-text">
                <p>Ideias e sugestões são muito bem-vindas para o nuarte!</p>
            </div>
        </article>
        <form class="rd-form rd-form-variant-2" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('send.email')}}">
            @csrf
            <div class="row row-14 gutters-14">
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="name">
                        <label class="form-label" for="contact-your-name-2">Nome</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email">
                        <label class="form-label" for="contact-email-2">E-mail</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-wrap">
                        <input class="form-input" id="contact-subject-2" type="text" name="subject">
                        <label class="form-label" for="contact-subject-2">Assunto</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Mensagem</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message"></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-primary" type="submit">Enviar mensagem</button>
        </form>
    </div>
</section>

@endsection