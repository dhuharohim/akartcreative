<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Akart Pictures - Project</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styleproject2.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->

    <body>

        <div class="section">
            <ul class="case-study-wrapper">
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.event') }}" class="hover-target">event</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.product') }}" class="hover-target">product</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.models') }}" class="hover-target">models</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.prewed') }}" class="hover-target">pre-wedding</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.graduation') }}" class="hover-target">graduation</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.shortvid') }}" class="hover-target">short video</a>
                </li>
                <li class="case-study-name">
                    <a href="{{ route('akartpictures.film') }}" class="hover-target">film</a>
                </li>
            </ul>
            <ul class="case-study-images">
                <li>
                    <img src="{{ asset('assets/img/event1.jpg') }}" alt="" class="img-hero-background">
                    <div class="dark-over-hero"></div>
                    <div class="hero-number-back">01</div>
                    <div class="hero-number">01</div>
                    <div class="hero-number-fixed">07</div>
                    <div class="case-study-title">graphic design, interaction</div>
                </li>
                <li>
                    <img src="{{ asset('assets/img/product2.jpg') }}" alt="" class="img-hero-background">
                    <div class="hero-number-back">02</div>
                    <div class="hero-number">02</div>
                    <div class="case-study-title">advertising, art direction</div>
                </li>
                <li>
                    <img src="{{ asset('assets/img/models.jpg') }}" alt="" class="img-hero-background">
                    <div class="hero-number-back">03</div>
                    <div class="hero-number">03</div>
                    <div class="case-study-title">photography, retouching</div>
                </li>
                <li>
                    <img src="{{ asset('assets/img/prewed.png') }}" alt="" class="img-hero-background">
                    <div class="hero-number-back">04</div>
                    <div class="hero-number">04</div>
                    <div class="case-study-title">photography, advertising</div>
                </li>
                <li>
                    <img src="{{ asset('assets/img/graduation.png') }}" alt="" class="img-hero-background">
                    <div class="hero-number-back">05</div>
                    <div class="hero-number">05</div>
                    <div class="case-study-title">photography, advertising</div>
                </li>
                <li>
                    <div class="img-hero-background"></div>
                    <div class="hero-number-back">06</div>
                    <div class="hero-number">06</div>
                    <div class="case-study-title">photography, advertising</div>
                </li>
                <li>
                    <div class="img-hero-background"></div>
                    <div class="hero-number-back">07</div>
                    <div class="hero-number">07</div>
                    <div class="case-study-title">photography, advertising</div>
                </li>
            </ul>
        </div>

        <!-- Page cursor
  ================================================== -->

        <div class='cursor' id="cursor"></div>
        <div class='cursor2' id="cursor2"></div>
        <div class='cursor3' id="cursor3"></div>

        <!-- Link to page
 ================================================== -->

        <a href="" class="link-to-portfolio1 hover-target"><img
            src="{{ asset('assets/img/akp1white.png') }}" alt=""></a>

        <a href="{{ route('akartpictures') }}" class="btn btn-outline-light link-to-portfolio hover-target" style="font-weight: bold">X</a>

    </body>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.2.2.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script src="{{ asset('assets/js/mainproject2.js') }}"></script>

</body>

</html>
