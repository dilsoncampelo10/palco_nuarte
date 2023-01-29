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
            @foreach($notices as $notice)
            <div class="col-sm-6 col-md-12 wow fadeInRight" id="notice{{$notice->id}}">
                <article class="product-big">
                    <div class="unit flex-column flex-md-row align-items-md-stretch">
                        <div class="unit-left"><a class="product-big-figure" href="#notice{{$notice->id}}"><img src="/assets/notices/{{$notice->image}}" alt="{{$notice->title}}" width="600" height="800" /></a></div>
                        <div class="unit-body">
                            <div class="product-big-body">
                                <h5 class="product-big-title"><a href="#notice{{$notice->id}}">{{$notice->title}}</a></h5>
                                <div class="group-sm group-middle justify-content-start">
                                    <div class="product-big-rating"></div><a class="product-big-reviews" href="#notice{{$notice->id}}"> {{$notice->description}}</a>
                                </div>
                                @if($notice->link)
                                <a class="button button-black-outline button-ujarak" href="{{$notice->link}}" target="_blank">Visualizar Notícia</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection