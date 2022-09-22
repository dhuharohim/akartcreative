<!-- ======= Services Section ======= -->
<section id="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
            <h3>{{ __('Services') }}</h3>
            <p>Kami memiliki Beberapa Layanan Jasa seperti Pembuatan konten kreatif baik audio maupun visual, karenanya kami klasifikasikan menjadi Akart Records dan Akart Pictures </p>
        </header>

        <div class="row">
            <div class="col-6">
                <a href="{{ route('akartrecords') }}" class="card1 records border-dark">
                    <div class="overlay"></div>            
                       <img src="{{ asset('assets/img/akartrecords.png') }}" alt="" style="width: 40%; height:40%;">                  
                    <h5 style="color: black">{{ __('Akart Records') }}</h5>
                </a>
            </div>

            <div class="col-6">
                <a href="{{ route('akartpictures') }}" class="card1 records border-dark">
                    <div class="overlay"></div>            
                       <img src="{{ asset('assets/img/AKP.png') }}" alt="" style="width: 40%; height:40%;">                  
                    <h5 style="color: black">{{ __('Akart Pictures') }}</h5>
                </a>
            </div>

        </div>

    </div>
</section><!-- End Services Section -->

