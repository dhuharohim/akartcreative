<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Akart Records - Project</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styleproject.css') }}" >

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="hero-center-section">
        <div class="left-text">compose</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-wrap">
                        <img src="{{ asset("assets/img/compose.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-center-section">
        <div class="left-text">arrange</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-wrap">
                        <img src="{{ asset("assets/img/arrange.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-center-section">
        <div class="left-text">record</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-wrap">
                        <img src="{{ asset("assets/img/record.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-center-section">
        <div class="left-text">mixing</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-wrap">
                        <img src="{{ asset("assets/img/timeline1.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-center-section">
        <div class="left-text">mastering</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="img-wrap">
                        <img src="{{ asset("assets/img/mixing.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section padding-top-bottom over-hide z-bigger">
        <ul class="slide-buttons">
            <li class="">
                <a href="{{ route('akartrecords.compose') }}" class="hover-target" data-hover="compose">compose</a>
            </li>
            <li class="">
                <a href="{{ route('akartrecords.arrange') }}" class="hover-target" data-hover="arrange">arrange</a>
            </li>
            <li class="">
                <a href="{{ route('akartrecords.record') }}" class="hover-target" data-hover="record">record</a>
            </li>
            <li class="">
                <a href="{{ route('akartrecords.mixing') }}" class="hover-target" data-hover="mixing">mixing</a>
            </li>
            <li class="">
                <a href="{{ route('akartrecords.mastering') }}" class="hover-target" data-hover="mastering">mastering</a>
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

    <a href="https://www.instagram.com/akart.records/" class="link-to-page1 hover-target" target="_blank"><img
            src="{{ asset('assets/img/ar.png') }}" alt=""></a>
    
    <a href="{{ route('akartrecords') }}" class="btn btn-outline-light link-to-page hover-target" style="font-weight: bold">X</a>


    <!-- Dark/light switch
 ================================================== -->

    {{-- <div class="bottom-right">
        <div class="switch">
            <div class="circle hover-target"></div>
        </div>
    </div> --}}

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="{{ asset('assets/js/mainproject.js') }}"></script>

   

</body>

</html>
