<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Akart Records</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styleakartrecords.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <header class="cd-header">
        <div class="header-wrapper">
            <div class="logo-wrap">
                <a href="#" class="link-to-page hover-target">
                    <img src="{{ asset('assets/img/ar.png') }}" alt="">
                </a>
            </div>
            <div class="nav-but-wrap">
                <div class="menu-icon hover-target">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>
        </div>
    </header>

    <div class="nav">
        <div class="nav__content">
            <ul class="nav__list">
                <li class="nav__list-item"><a href="{{ route('akartrecords.project') }}"
                        class="hover-target">project</a></li>
                <li class="nav__list-item"><a href="#" class="hover-target">testimonials</a></li>
            </ul>
        </div>
    </div>

    <div class="section full-height over-hide">
        <div class="switch-wrap">
            <h1>Akart Records</h1>
            {{-- <button type="button" class="btn btn-outline-light mr-2" data-toggle="modal" data-target="#contact">
                contact
            </button>
            <button type="button" class="btn btn-outline-light ml-2" data-toggle="modal" data-target="#about">
                about
            </button> --}}
            <button class="open btn btn-outline-light">about</button>
            <div class="modals">
                <div class="modal-content">
                  <div class="modal-wrap">
                    <p>Akart Records adalah tempat rekaman dan produksi musik mulai dari Recording, Arranging, Composing, Editing Audio, Mixing dan Mastering.
                        Produk‑produk yang ditangani Akart Records meliputi project rekaman Single, Mini Album, Full Album, Background Music, Soundtrack, Jingle, Voice Over, Scoring Film dan produk audio lainnya.
                    </p>
                    <br>
                    <p>
                        Alamat : <br>
                        Akart Creative Studio
                        Perumda Blok ML No.05
                        Jl. Perumda Bojonegoro, Sumbang Kidul, Sumbang, Kec. Bojonegoro, Kabupaten Bojonegoro, Jawa Timur 62115
                    </p>
                    <br>
                    <p>
                        <a class="mr-2 btn btn-outline-dark" href="https://wa.me/+6289681755757" target="__blank" style="color:inherit; font-weight:bold;">whatsapp</a>
                        <a class="ml-2 btn btn-outline-dark" href="https://www.instagram.com/akart.records/" target="__blank" style="color:inherit; font-weight:bold;">instagram</a>
                    </p>
                  
                    <button class="close2 btn btn-outline-dark" style="color:#8167a9; font-weight:bold; ">close</button>
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
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/mainakartrecords.js') }}"></script>
</body>

</html>
