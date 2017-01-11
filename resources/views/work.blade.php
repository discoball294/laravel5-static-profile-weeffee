@extends('layouts.master')

@section('title')
    <title>Works - Weeffee Studio</title>
@endsection
@section('content')
    <section class="page-title page-title-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">Our Awesome Works</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">Works</li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="projects pt48">
        <div class="container">
            <div class="row pb24">
                <div class="col-sm-12 text-center">
                    <ul class="filters mb0">
                        <li data-filter="all" class="active">All</li>
                        <li data-filter="People">People</li>
                        <li data-filter="Animals">Animals</li>
                        <li data-filter="Objects">Objects</li>
                    </ul>
                </div>
            </div>
            <!--end of row-->
            <div class="row masonry-loader fadeOut">
                <div class="col-sm-12 text-center">
                    <div class="spinner"></div>
                </div>
            </div>
            <div class="row masonry masonryFlyIn fadeIn" style="position: relative; height: 629px;">
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="Web"
                     style="position: absolute; left: 0px; top: 0px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-1.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Happy Couple</h5>
                                <span>People / Life</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="Mobile"
                     style="position: absolute; left: 292px; top: 0px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-2.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Lonely Dog</h5>
                                <span>Animals / Art</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="UI/UX"
                     style="position: absolute; left: 585px; top: 0px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-5.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Vintage Typewriter</h5>
                                <span>Objects / Isolated</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="Web"
                     style="position: absolute; left: 877px; top: 0px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-6.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Thick Fog</h5>
                                <span>People / Life</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="Web"
                     style="position: absolute; left: 292px; top: 205px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-3.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Pondering Blonde</h5>
                                <span>People / Life</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 masonry-item project fadeIn" data-filter="UI/UX"
                     style="position: absolute; left: 877px; top: 205px;">
                    <div class="image-tile inner-title hover-reveal text-center">
                        <a href="#">
                            <img alt="Pic" src="img/project-single-4.jpg">
                            <div class="title">
                                <h5 class="uppercase mb0">Summer Lovin'</h5>
                                <span>Objects / Food</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg-secondary pt64 pb64">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="mb8">Create something beautiful.</h2>
                    <p class="lead mb40">
                        The choice is clear.
                    </p>
                    <a class="btn btn-filled btn-lg mb0" href="{{ route('contact') }}">Contact Now</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection