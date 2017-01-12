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
                Need a killer graphic design, interactive mobile app and website or engaging social media marketing? We
                would love to hear how we can help in achieving your digital communication goals!
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
    <a id="form-contact"></a>
    <section class="image-square right">
        <div class="col-md-6 p0 image">
            <div class="map-holder background-image-holder fadeIn" style="background: url(&quot;undefined&quot;);">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJt9vxlmwo1i0Ruvq52bDi0xE&key=AIzaSyBPJJfVu15V7HogRaQIqg46GsqX6nYSoBs&zoom=16"></iframe>
            </div>
        </div>
        <div class="col-md-6 content">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Hooray!</strong> {{ Session::get('message') }}
                </div>
            @endif
            @if(count($errors) > 0)

                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Oops!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>


            @endif
            <form method="post" action="{{ route('send') }}">
                <h6 class="uppercase text-center">Send A Message</h6>
                <input type="text" class="validate-required" name="name" placeholder="Your Name"
                       value="{{ old('name') }}">
                <input type="text" class="validate-required validate-email" name="email" placeholder="Email Address"
                       value="{{ old('email') }}">
                <textarea class="validate-required" name="message" rows="4" placeholder="Message"
                          value="{{ old('message') }}"></textarea>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
@endsection