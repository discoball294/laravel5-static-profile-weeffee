@extends('layouts.master')
@section('title')
<title>About - Weeffee Studio</title>
@endsection
@section('content')
    <section class="page-title page-title-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">About Us</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">About Us</li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/small2.jpg&quot;);">
                <img alt="image" class="background-image" src="img/small2.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h4 class="uppercase">We Are <strong>Weeffee Studio</strong> <br>A Malang Based Modern Digital Agency</h4>
            <p>
                Weeffee Studio was founded in 2016. We are still young but the team we have has many years of experience in Creative Industry
            </p>
            <p>
                A modern creative digital agency in malang, Weeffee Studio provides a comprehensive service for all your digital communication needs. From <strong>content marketing strategy</strong>, state of the art <strong>graphic design</strong> to <strong>web development & interactive mobile apps</strong>, our team can make all your creative dreams come true. We pride on our creativity and dedication. We are a team of innovative-thinkers, but also diligent doers. Dream wild, we will make it happen for you!
            </p>
        </div>
    </section>
@endsection