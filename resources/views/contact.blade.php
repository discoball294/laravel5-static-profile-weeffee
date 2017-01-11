@extends('layouts.master')

@section('title')
<title>Contact - Weeffee Studio</title>
@endsection

@section('content')
    <section class="page-title page-title-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="uppercase mb0">Contact</h3>
                </div>
                <div class="col-md-6 text-right">
                    <ol class="breadcrumb breadcrumb-2">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="active">Contact</li>
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
            <h4 class="uppercase">Get In Touch</h4>
            <p>
                Need a killer graphic design, interactive mobile app and website or engaging social media marketing? We would love to hear how we can help in achieving your digital communication goals!
            </p>
            <hr>
            <p>
                Jl. Sadewo no. 28b
                <br> Polehan, Malang
                <br> 65121
            </p>
            <p>
                <strong>E:</strong> <a href="mailto:info@weeffeestudio.net">info@weeffeestudio.net</a>
                <br>
                <strong>P:</strong> <a href="tel:0341394272">+62341 394 272</a>
                <br>
            </p>
        </div>
    </section>
    <section class="image-square right">
        <div class="col-md-6 p0 image">
            <div class="map-holder background-image-holder fadeIn" style="background: url(&quot;undefined&quot;);">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJt9vxlmwo1i0Ruvq52bDi0xE&key=AIzaSyBPJJfVu15V7HogRaQIqg46GsqX6nYSoBs&zoom=16"></iframe>
            </div>
        </div>
        <div class="col-md-6 content">
            <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly." data-error="Please fill all fields correctly.">
                <h6 class="uppercase text-center">Send A Message</h6>
                <input type="text" class="validate-required" name="name" placeholder="Your Name">
                <input type="text" class="validate-required validate-email" name="email" placeholder="Email Address">
                <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection