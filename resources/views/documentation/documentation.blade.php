<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Weeffee Studio - Documentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/all.css" rel="stylesheet" type="text/css" media="all"/>

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
          rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:100,300,400,600,700" rel="stylesheet" type="text/css">
    <link href="css/font-poppins.css" rel="stylesheet" type="text/css">
</head>
<body class="scroll-assist">
<div class="nav-container bg-dark" style="min-height: 100px;">
    <a id="top"></a>
    <nav class="bg-dark">
        <div class="nav-bar">
            <div class="module left">
                <a href="{{ route('home') }}">
                    <img class="logo logo-light" alt="Foundry" src="img/logo-light-weeffee.png">
                    <img class="logo logo-dark" alt="Foundry" src="img/logo-light-weeffee.png">
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module right">
                    <ul class="menu">
                        <li class="has-dropdown">
                            <a href="#">
                                Contents
                            </a>
                            <ul>
                                <li>
                                    <a href="#introduction">
                                        Introduction
                                    </a>
                                </li>
                                <li class="has-dropdown right">
                                    <a href="#content">
                                        Page Contents
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#halaman-utama">
                                                Halaman Utama
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#halaman-service">
                                                Halaman Service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#halaman-portofolio">
                                                Halaman Portofolio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#halaman-contact">
                                                Halaman Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#halaman-about">
                                                Halaman About
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#features">
                                        Features
                                    </a>
                                </li>
                                <li>
                                    <a href="#avail-controller">
                                        Available Controllers
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--end of menu module-->
            </div>
            <!--end of module group-->
        </div>
    </nav>
</div>
<div class="main-container">
    <section class="page-title page-title-1 image-bg overlay parallax">
        <div class="background-image-holder fadeIn" style="background: url(&quot;img/home2.jpg&quot;); top: -55px;">
            <img alt="Background Image" class="background-image" src="img/home2.jpg" style="display: none;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb0">Weeffee Studio Documentation</h2>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <a id="introduction"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <h4 class="uppercase">Introduction</h4>
                    <hr>
                    <p class="lead">
                        Dokumentasi ini berisi tentang isi, fitur yang ada pada website company profile Weeffee Studio.
                        Website ini di buat menggunakan <a href="">Laravel Framework</a>, <a href="">Bootstrap</a>, dll.
                    </p>
                </div>
            </div><!--end of row-->


        </div><!--end of container-->
    </section>
    <a id="content"></a>
    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <h4 class="uppercase">Page Contents</h4>
                    <hr class="mb64">
                    <a id="halaman-utama"></a>
                    <h5 class="uppercase mt64">Halaman Utama</h5>
                    <p class="lead boxed">
                        <img src="img/doc/home-page.png">
                    </p>
                    <p class="lead">
                        Halaman utama ini berisi sekilas tentang perusahaan, layanan yg tersedia pada perusahaan,
                        portofolio/project yang telah di kerjakan, client yang telah menggunakan jasa perusahaan, dan
                        info alamat.
                    </p>
                    <hr class="mb64">
                    <a id="halaman-service"></a>
                    <h5 class="uppercase mt64">Halaman Service</h5>
                    <p class="lead boxed">
                        <img src="img/doc/services-page.png">
                    </p>
                    <p class="lead">
                        Pada halaman ini berisi informasi layanan yang tersedia pada perusahaan ini, terdapat 5 layanan
                        yg tersedia yaitu:
                    </p>
                    <ul>
                        <li>Website Design & Development</li>
                        <li>Mobile Apps</li>
                        <li>Social Media Strategy</li>
                        <li>SEO & Digital Ads</li>
                        <li>Content Marketing</li>
                    </ul>
                    <hr class="mb64">
                    <a id="halaman-portofolio"></a>
                    <h5 class="uppercase mt64">Halaman Portofolio</h5>
                    <p class="lead boxed">
                        <img src="img/doc/portofolio-page.png">
                    </p>
                    <p class="lead">
                        Berisi portofolio project - project yang telah di kerjakan
                    </p>
                    <hr class="mb64">
                    <a id="halaman-contact"></a>
                    <h5 class="uppercase mt64">Halaman Contact</h5>
                    <p class="lead boxed">
                        <img src="img/doc/contact-page.png">
                    </p>
                    <p class="lead">
                        Berisi informasi umum seperti alamat, nomor telepon, alamat email, peta lokasi, dan form
                        hubungi.
                    </p>
                    <hr class="mb64">
                    <a id="halaman-about"></a>
                    <h5 class="uppercase mt64">Halaman About</h5>
                    <p class="lead boxed">
                        <img src="img/doc/about-page.png">
                    </p>
                    <p class="lead">
                        Berisi informasi tentang perusahaan
                    </p>


                </div>
            </div><!--end of row-->


        </div><!--end of container-->
    </section>
    <a id="features"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <h4 class="uppercase">Features</h4>
                    <hr>
                    <p class="lead">
                        N/A
                    </p>
                </div>
            </div><!--end of row-->


        </div><!--end of container-->
    </section>
    <a id="avail-controller"></a>
    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <h4 class="uppercase">Available Routes and Controller</h4>
                    <hr>

                    <h5>Routes</h5>
                    <p class="lead">
                        List routes yg terdapat pada website ini
                    </p>
                    <h6>
                        Index / Home Page
                    </h6>
                    <pre>

  /
                    </pre>
                    <h6>
                        Halaman services / Layanan
                    </h6>
                    <pre>

  /services
                    </pre>
                    <h6>
                        Halaman portofolio
                    </h6>
                    <pre>

  /works
                    </pre>
                    <h6>
                        Halaman contact
                    </h6>
                    <pre>

  /contact
                    </pre>
                    <h6>
                        Halaman about
                    </h6>
                    <pre>

  /about
                    </pre>

                    <h5>Controllers</h5>
                    <p class="lead">
                        List controller yg terdapat pada website ini
                    </p>
                    <h6>
                        ContactFormController fungsi postContactForm
                    </h6>
                    <p class="lead">Berfungsi menerima inputan pada view, dan melakukan validasi pada inputan form tersebut</p>
                    <p class="lead">
                        <img src="img/doc/validation-input-success.png">
                        Menampilkan pesan jika input pada form memenuhi syarat
                        <img class="pt32" src="img/doc/validation-input-error.png">
                        Menampilkan pesan jika input pada form tidak memenuhi syarat
                    </p>
                </div>
            </div><!--end of row-->


        </div><!--end of container-->
    </section>

    @include('includes.footer')
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flickr.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>