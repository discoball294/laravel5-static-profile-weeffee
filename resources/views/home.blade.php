@extends('layouts.master')
@section('title')
    <title>Weeffee Studio - Malang based Digital Agency</title>
@endsection
@section('content')
    <section class="bg-primary pt240 pb240 pt-xs-120 pb-xs-80 overlay image-bg">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="img/agency-cover.jpg"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h3 class="mb56 mb-xs-24">
                        <strong>Weeffee Studio</strong> is a modern creative digital agency in malang, provides a
                        comprehensive service for all your digital communication needs.
                    </h3>
                    <a class="btn btn-lg btn-white mb0" href="#">Get to know us better</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <a id="about"></a>
    <section class="pt180 pb180 pt-xs-80 pb-xs-80">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h3 class="mb40 mb-xs-32">An agency founded on the principles of Honesty, Clarity, Simplicity.</h3>
                    <p class="lead mb0">
                        A modern creative digital agency in malang, Weeffee Studio provides a comprehensive service for
                        all your digital communication needs. From <strong>content marketing strategy</strong>, state of
                        the art <strong>graphic design</strong> to <strong>web development & interactive mobile
                            apps</strong>, our team can make all your creative dreams come true. We pride on our
                        creativity and dedication. We are a team of innovative-thinkers, but also diligent doers. Dream
                        wild, we will make it happen for you!
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature feature-2 bordered">
                        <div class="text-center">
                            <i class="ti-ruler-pencil icon-sm"></i>
                            <h5 class="uppercase">We Are Developers</h5>
                        </div>
                        <p>
                            We deliver the best web and mobile app development solutions to fit each of our customers’ unique business requirements and strategies. From the first concept to design and development, our experienced developers will work with you until you are satisfied with your final product.
                        </p>
                    </div>
                    <!--end of feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-2 bordered">
                        <div class="text-center">
                            <i class="ti-palette icon-sm"></i>
                            <h5 class="uppercase">We Are Creative</h5>
                        </div>
                        <p>
                            Defining your brand is the most important element of establishing an identity. We start at square one in the process, market research and establishing goals to help your brand succeed.
                        </p>
                    </div>
                    <!--end of feature-->
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-2 bordered">
                        <div class="text-center">
                            <i class="ti-world icon-sm"></i>
                            <h5 class="uppercase">We Are Internet Marketing</h5>
                        </div>
                        <p>
                            Digital Marketing service from Weeffee Studio enables our clients to connect with their audiences beyond the website through the use of different channels including social media, targeted advertising campaigns, website makeover, and content optimization.
                        </p>
                    </div>
                    <!--end of feature-->
                </div>

            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt40 pb40 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb0">Want to see more detailed services?</h2><br>
                    <a class="btn btn-lg btn-default bg-dark mb0" href="{{ route('services') }}">LETS SEE DETAILED SERVICES</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <a id="work"></a>
    <section class="pt40 pb40 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb0">OUR AWESOME WORKS</h2>
                    <p></p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="projects p0 bg-dark">
        <ul class="filters floating cast-shadow mb0"
            style="position: absolute; top: 16px; bottom: auto; transform: translate3d(-50%, 0px, 0px);">
            <li data-filter="all" class="active">All</li>
            <li data-filter="Web">Web</li>
            <li data-filter="Mobile App">Mobile App</li>
            <li data-filter="UI">UI / UX</li>
        </ul>
        <div class="row masonry-loader fadeOut">
            <div class="col-sm-12 text-center">
                <div class="spinner"></div>
            </div>
        </div>
        <div class="row masonry masonryFlyIn fadeIn" style="position: relative; height: 1050px;">
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="Web"
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
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="Mobile App"
                 style="position: absolute; left: 485px; top: 0px;">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/phot1.jpg">
                        <div class="title">
                            <h5 class="uppercase mb0">Lonely Dog</h5>
                            <span>Animals / Art</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="Web"
                 style="position: absolute; left: 970px; top: 0px;">
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
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="UI/UX"
                 style="position: absolute; left: 485px; top: 279px;">
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
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="UI/UX"
                 style="position: absolute; left: 0px; top: 728px;">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/phot3.jpg">
                        <div class="title">
                            <h5 class="uppercase mb0">Summer Lovin'</h5>
                            <span>Objects / Food</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project fadeIn" data-filter="Web"
                 style="position: absolute; left: 970px; top: 728px;">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="img/phot2.jpg">
                        <div class="title">
                            <h5 class="uppercase mb0">Thick Fog</h5>
                            <span>People / Life</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--end of row-->
    </section>
    <section class="pt40 pb40 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb0">Want to see more works?</h2><br>
                    <a class="btn btn-lg btn-white mb0" href="{{ route('works') }}">LETS SEE PORTOFOLIO</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <a id="clients"></a>
    <section class="bg-secondary pt180 pb180 pt-xs-80 pb-xs-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h3 class="mb48 mb-xs-32">Some amazing companies we've had the pleasure to work with.</h3>
                    <div class="text-slider slider-paging-controls text-center relative">
                        <ul class="slides">
                            <li>
                                <h5>The guys at Foundry were an absolute pleasure to work with - they took on our
                                    project with the same enthusiasm and passion as us.</h5>
                                <div class="quote-author">
                                    <img alt="Author" class="image-xs mb16" src="img/avatar4.png"/>
                                    <h6 class="uppercase mb0">Anna Thompson</h6>
                                    <span>Vault</span>
                                </div>
                            </li>
                            <li>
                                <h5>We've worked with Foundry on our web presence over the past 8 years and always
                                    relish the opportunity to work alongside them.</h5>
                                <div class="quote-author">
                                    <img alt="Author" class="image-xs mb16" src="img/avatar3.png"/>
                                    <h6 class="uppercase mb0">Carl Vance</h6>
                                    <span>Aviary Bar</span>
                                </div>
                            </li>
                            <li>
                                <h5>There is only once choice when it comes to our marketing collateral, Foundry always
                                    deliver inspiring work on-time and budget.</h5>
                                <div class="quote-author">
                                    <img alt="Author" class="image-xs mb16" src="img/avatar6.png"/>
                                    <h6 class="uppercase mb0">Natasha Canter</h6>
                                    <span>Vault</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center overflow-hidden">
                    <h5 class="uppercase text-center fade-half mb64 mb-xs-32">Selected Clients</h5>
                    <div class="col-sm-6">
                        <ul>
                            <li>
                                <h6 class="uppercase mb8">Apple</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Acorn Technology</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Google</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Gourmet Traveller</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Broadsheet</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Padre Food Co.</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Foundry</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <li>
                                <h6 class="uppercase mb8">BOSE</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Kilgour Wines</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">University of Victoria</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">MOMA NYC</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Belltower Ltd.</h6>
                            </li>
                            <li>
                                <h6 class="uppercase mb8">Bowers & Wilkins</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <a id="contact"></a>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder fadeIn" style="background: url(&quot;img/arch6.jpg&quot;);">
                <img alt="image" class="background-image" src="img/arch6.jpg" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h3 class="uppercase">Get In Touch</h3>
            <p class="lead">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.
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
@endsection