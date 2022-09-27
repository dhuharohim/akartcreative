<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{ __('Akart Creative') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/akartlogo.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizPage - v5.8.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <a href="index.html" class="logo"><img src="{{ asset('assets/img/akartlogo.png') }}"
                            alt="" class="img-fluid"></a>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">{{ __('Home') }}</a></li>
                            <li><a class="nav-link scrollto" href="#about">{{ __('About') }}</a></li>
                            <li><a class="nav-link scrollto" href="#services">{{ __('Services') }}</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">{{ __('Portfolio') }}</a></li>
                            <li><a class="nav-link scrollto" href="#team">{{ __('Team') }}</a></li>
                            <li><a class="nav-link scrollto" href="#contact">{{ __('Contact') }}</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    @include('dashboard.index')


    <main id="main">
        @include('about.index')

        @include('services.index')

        @include('skills.index')

        @include('portfolio.index')

        @include('clients.index')

        @include('testimonials.index')

        @include('teams.index')

        @include('contacts.index')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>Akart <br>Creative</h3>
                        <p style="text-align: justify;
                        text-justify: inter-word;">Akart Creative merupakan rumah produksi yang berfokus dalam dunia entertainment khususnya
                            pada produksi ide audio dan visual, Bergerak untuk membangun ekosistem dalam industri
                            kreatif di daerah kami yang terletak di Bojonegoro, Jawa Timur.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#blog">Blog</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Jl.Panglima Polim Perumda Blok ML-5 <br>
                            Bojonegoro, Jawa Timur 62115<br>
                            Indonesia <br>
                            <strong>Phone:</strong> +62 8968 1755 757 (Halil)<br>
                            <strong>Email:</strong> akart.creative@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.instagram.com/akart.creative" class="instagram" target="__blank"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCzNSR2dSJhO6ayfopebCBgA" target="__blank"><i
                                    class="bi bi-youtube"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Akart Creative</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
                Designed by <a href="https://instagram.com/cmd.exee" target="__blank">cmd.exee</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
