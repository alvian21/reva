<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>MyDream - Aplikasi Finansial</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('new/assets/images/favicon.png') }}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/animate.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/LineIcons.css') }}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/font-awesome.min.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('new/assets/css/style.css') }}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('/new/assets/images/Logo.png')}}" width="120" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#Layanan">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#MisiKami">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#Grup">Team</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="btn_login" data-scroll-nav="0" href="{{route('getLogin')}}">Masuk</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="Informasi" class="header-hero bg_cover" style="background-image: url({{ asset('new/assets/images/banner-bg.svg') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <!-- <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Basic - SaaS Landing Page</h3> -->
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Wujudkan Impianmu </h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Kamu adalah
                                fokus utama kami, maka dari itu kami lakukan apa yang dapat
                                membantu mewujudkan impian kamu </p>

                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">

                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <img src="{{ asset('new/assets/images/Image - 1.svg') }}" alt="hero">
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== Layanan Terbaik  ======-->

    <section id="Layanan" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center pb-40">
                        <h3 class="title"> Layanan Terbaik </h3>
                        <p>Memberikan pengalaman diberbagai fitur sebagai aplikasi finasial
                            untuk Para Generasi Milenial </p>
                        <br>
                        <div class="line m-auto"></div>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row" style="margin-left: 5%;">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="services-icon">
                        <img src="{{ asset('new/assets/images/Image_1_1.svg') }}" alt="Image_1_1">
                        <h4 class="services-title">Kalkulator Finansial</h4>
                        <p class="text">Perkirakan dana yang
                            terkumpul di masa depanmu</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="services-icon">
                        <img src="{{ asset('new/assets/images/Imipanku.svg') }}" alt="Image_1_2">
                        <h4 class="services-title">Impianku</h4>
                        <p class="text">Rencanakan impian yang
                            kamu inginkan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="services-icon">
                        <img src="{{ asset('new/assets/images/Image_1_2.svg') }}" alt="Image_1_3">
                        <h4 class="services-title">Prioritas</h4>
                        <p class="text">Atur Prioritas kamu sesuai dengan Kengininanmu
                        </p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>



    <!--====== Misi Kita  ======-->

    <section id="MisiKami" class="about-area pt-70">
        <!-- <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div> -->
        <div class="section-title text-center pb-40">
            <h3 class="title"> Mengenai Kami </h3>
            <br>
            <div class="line m-auto"></div>
        </div> <!-- section title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h3 class="title">Kami adalah penyedia layanan tabungan masa depan, untuk hidup lebih
                                terencana </h3>
                        </div> <!-- section title -->
                        <p class="text">Melalui kemudahan teknologi dan sentuhan finansial, MyDream menyajikan layanan
                            tabungan untuk menciptakan kebahagiaan di seluruh pelosok Indonesia, sepertimu.</p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="{{ asset('new/assets/images/savings.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== Problem Solving  ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h3 class="title">Dimulai dengan... </h3>
                        </div> <!-- section title -->
                        <p class="text">Banyaknya Generasi Milenial yang memaksakan
                            mengikuti gaya hidup influencer tanpa melihat
                            kebutuhan hidup dirinya. Mengapa tidak merencanakannya
                            agar kebutuhan dan keinginanmu seimbang? </p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="{{ asset('new/assets/images/DESIGNED BY FREEPIK.svg') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div>
        </div> <!-- row -->
        </div> <!-- container -->
        <!-- <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div> -->
    </section>

    <!-- Misi Kami  -->
    <section id="Grup" class="services-area pt-120">
        <div class="section-title text-center pb-40">
            <h3 class="title"> Perkenalkan Kami </h3>
            <p>Pemuda-pemudi Indonesia yang percaya bahwa hal besar dimulai
                dari langkah kecil, seperti impianmu
            </p>
            <br>
        </div>
        <div class="container">
            <div class="row" style="margin-left: 4%;">
                <div class="col-md-6">
                    <div class="card st-3">
                        <img src="{{ asset('new/assets/images/reva.svg') }}" alt="avatar">
                        <div class="container">
                            <h4><b>Reva Eka Prasetyo</b></h4>
                            <p>Leader of Grup One</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card st-3">
                        <img src="{{ asset('new/assets/images/Meisya.svg') }}" alt="avatar">
                        <div class="container">
                            <h4><b>Meisya Jala Girinda</b></h4>
                            <p>Staf of Grup One</p>
                        </div>
                    </div>
                </div>
                <!--PEMBATAS ATAS DAN BAWAH-->

            </div>
        </div>


        <div class="row d-flex justify-content-center" style="padding: 5%;">
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('new/assets/images/kusuma.svg') }}" alt="avatar">
                    <div class="container">
                        <h4><b>Kusumaningayu Indriani</b></h4>
                        <p>Staf of Grup One</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('new/assets/images/abyan.svg') }}" alt="avatar">
                    <div class="container">
                        <h4><b>Abyan Akbar Indroyono</b></h4>
                        <p>Staf of Grup One</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="{{ asset('new/assets/images/sigit.svg') }}" alt="avatar">
                    <div class="container">
                        <h4><b>Sigit Aditya Nurbiyantoro</b></h4>
                        <p>Staf of Grup One</p>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <!-- Batas -->

    </section>

    <div class="section-title text-center pb-40">
        <h4 class="title">Bersama Kamu, kami berhasil meraih…</h4>
    </div> <!-- section title -->



    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-sm-7">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{ asset('new/assets/images/Logo.png') }}" alt="logo">
                            </a>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-5">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Layanan</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Kalkulator Finansial</a></li>
                                    <li><a href="#">Impianku</a></li>
                                    <li><a href="#">Prioritas</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Hubungi Kami</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Bantuan</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Akun</h4>
                            </div>
                            <ul class="contact">
                                <li>Masuk</li>
                                <li>Akun</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright text-center">
                <p class="text">© 2020 Designed & Developer by Dinamika Design
                    Reserved.</p>
            </div>
        </div> <!-- container -->
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{ asset('new/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('new/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/bootstrap.min.js') }}"></script>

    <!--====== Plugins js ======-->
    <script src="{{ asset('new/assets/js/plugins.js') }}"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('new/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('new/assets/js/scrolling-nav.js') }}"></script>

    <!--====== wow js ======-->
    <script src="{{ asset('new/assets/js/wow.min.js') }}"></script>

    <!--====== Particles js ======-->
    <script src="{{ asset('new/assets/js/particles.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('new/assets/js/main.js') }}"></script>

</body>

</html>
