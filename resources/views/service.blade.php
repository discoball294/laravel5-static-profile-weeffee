@extends('layouts.master')
@section('title')
<title>Services - Weeffee Studio</title>
@endsection
@section('content')
    <section class="page-title page-title-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">Services</h3>

                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/cover11.jpg&quot;);">
                <img alt="image" class="background-image" src="img/web-dev.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h3>Website Design & Development</h3>
            <p class="mb0">
                Take a competitive edge with customized web design adaptable to modern day technology. Our designs are created with function in mind and work on multiple user interfaces, including desktop and laptop screens of all sizes, tablets, and smartphones. We do this by researching your users before prototyping the website, working through the content hierarchy with you to define how the content should be structured and intertwine this with the most enjoyable user experience.
            </p>
        </div>
    </section>
    <section class="image-square right bg-dark">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/small1.jpg&quot;);">
                <img alt="image" class="background-image" src="img/apps.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 content">
            <h3>Mobile Apps</h3>
            <p class="mb0">
                Mobile devices are increasingly utilized to access content and interact with brands. So, it is critical that you have a well-designed and solidly executed mobile experience. Dopeworks provides clients with brand consistency through and throughout customized mobile websites and applications. We can do every platform; Android, IOS, and Windows Mobile application.
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/cover11.jpg&quot;);">
                <img alt="image" class="background-image" src="img/socmed.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h3>Social Media Strategy</h3>
            <p class="mb0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
        </div>
    </section>
    <section class="image-square right bg-dark">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/small1.jpg&quot;);">
                <img alt="image" class="background-image" src="img/small1.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 content">
            <h3>SEO & Digital Ads</h3>
            <p class="mb0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
        </div>
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/hero1.jpg&quot;);">
                <img alt="image" class="background-image" src="img/hero1.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h3>Content Marketing</h3>
            <p class="mb0">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
            </p>
        </div>
    </section>
    <section class="pt64 pb64">
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
            <div class="embelish-icons">
                <i class="ti-marker"></i>
                <i class="ti-layout"></i>
                <i class="ti-ruler-alt-2"></i>
                <i class="ti-eye"></i>
                <i class="ti-signal"></i>
                <i class="ti-pulse"></i>
                <i class="ti-marker"></i>
                <i class="ti-layout"></i>
                <i class="ti-ruler-alt-2"></i>
                <i class="ti-eye"></i>
                <i class="ti-signal"></i>
                <i class="ti-pulse"></i>
            </div>
        </div>
        <!--end of container-->
    </section>
@endsection