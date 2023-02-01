@extends('layouts.main')
@section('title','Projetos publicados')

@section('content')
<section class="breadcrumbs-custom-inset">
    <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">

            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html"></a></li>

            </ul>
        </div>
        <div class="box-position" style="background-image: url(assets/images/logo4.gif);"></div>
    </div>
</section>
</section>

<section class="section section-sm section-first bg-default text-left">
    <div class="container">
        <ul class="list-xl box-typography">
            @foreach($projects as $project)
            <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="offset-left-xl-45">
                        <img src="/assets/projects/user/file/{{$project->file}}" alt="autor">
                    </div>
                </div>
                <div class="col-xl-7">
                    <li>
                        <h2 style="font-size: 2.5em; margin-bottom: 8px;">{{$project->title}}</h2>
                        @if($project->id_category==1)
                        <pre style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">

                        <p>{{$project->description}}</p>
                        </pre>
                        @else
                        <p>{{$project->description}}</p>
                        @endif
                        <p>{{$project->dateCreation}} by {{$project->author}}</p>
                    </li>
                </div>

                @endforeach
        </ul>
    </div>
    </div>
    </div>
</section>
<!-- HTML Text Elements-->


<!-- Lists and Blockquote-->
<section class="section section-sm section-last bg-default text-left">
    <div class="container">
        <div class="row row-60 row-md-80 row-lg-90">
            <div class="col-lg-8 col-xl-6">


            </div>
</section>
@endsection