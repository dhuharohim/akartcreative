<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Akart Pictures</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styleakartpictures.css') }}" >

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="hero-section">
        <div class="about-text hover-target">about</div>
        <div class="contact-text hover-target">contact</div>
        <div class="section-center">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1 id="headingAP">Akart Pictures</h1>
                    </div>
                    <div class="text-center">
                        <p>
                            <a href="{{ route('akartpictures.project') }}" class="hover-target" style="color:inherit;">project</a> <span></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section">
        <div class="about-close hover-target"></div>
        <div class="section-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <img src="{{ asset('assets/img/akp1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8 text-center mt-3">
                        <p class="mb-2 mt-2">
                            Kami mengutamakan keinginan client dengan sentuhan profesional 
                            sehingga dapat menjadikan kualitas yang memuaskan.
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="mb-0"><span>Akart Pictures</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <div class="contact-close hover-target"></div>
        <div class="section-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="#" class="hover-target">akart.pictures@gmail.com</a>
                    </div>
                    <div class="col-12 text-center social mt-4">
                        <a href="https://www.instagram.com/akart.pictures/" target="__blank" class="hover-target">instagram</a>
                        <a href="https://wa.me/+6285816326997" class="hover-target">whatsapp(dani)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>

    <!-- Link to page
 ================================================== -->

    <a href="#" class="logo hover-target" target="_blank">
        <img src="{{ asset('assets/img/akp1white.png') }}" alt="">
    </a>
    
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="{{ asset('assets/js/mainakartpictures.js') }}"></script>

</body>

</html>
