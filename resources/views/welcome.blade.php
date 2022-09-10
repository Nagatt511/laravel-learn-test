@extends('layouts.app');

@section('title')
    welcome!
@endsection

@section('content')
{{-- Carousel wrapper  --}}
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        {{-- Indicators --}}
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1" ></li>
            <li data-target="#carousel-example-2" data-slide-to="2" ></li>
        </ol>
        {{-- /.Indicators --}}
        {{-- Slides --}}
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide" style="...">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption" >
                    <h3 class="h3-responsive">Light-mask</h3>
                    <p>First text</p>
                </div>
            </div>
            {{-- !Mask color --}}
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(8).jpg" alt="Secondary slide" style="...">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption" >
                    <h3 class="h3-responsive">Strong-mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            {{-- !Mask color --}}
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide" style="...">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption" >
                    <h3 class="h3-responsive">Slight-mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        {{-- /.Slides --}}
        {{-- Controls --}}
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previos</span>
        </a>    
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"> Next </span>
        </a>
        {{-- /.Controls --}}

    </div>
{{-- /.Carousel wrapper  --}}
<div class="container">
    {{-- Nav Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">
        {{--  Nav Bar Brand --}}
        <span class="navbar-brand">Categories:</span>

        {{-- Collapse Button --}}
        <button class="navbar-toggler" type ="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toogle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Collapsible content --}}
        <div class="collapse navbar-collapse" id="basicExampleNav">
            
            {{-- Links --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> All
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"> Phones </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"> Laptops </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"> Headphones </a>
                </li>
            </ul>
            {{-- /.Links --}}
            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        {{-- Collapwsible content --}}
    </nav>
    {{-- /.Nav Bar --}}

</div>

{{-- Section: Product v.3 --}}
<section class="text-center mb-4">
    {{-- Grid row --}}
    <div class="row wow fadeIn">

    </div> 
    {{-- /.Grid row --}}
    <a href="{{ route('catalog.index')}}" class="btn btn-block btn-primary"> To catalog</a>
</section>
{{-- /.Section: Product v.3 --}}
@endsection