@extends('layouts.app')
@section('webLabs.css')
    <title>WebLabs | About Us</title>
    <!-- Favicons -->
    <link href="{{ asset('webLabs/static/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('webLabs/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') }}"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('webLabs/static/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webLabs/static/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('static/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('webLabs/static/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('webLabs/static/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webLabs/static/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('webLabs/static/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webLabs/static/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css' %}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('webLabs/static/css/style.css') }}" rel="stylesheet">
@endsection
@section('webLabs.content')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                @foreach($abouts as $about)
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>{!! $about->title !!}</h3>
                            <p>{!! $about->text !!}</p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($about->image) }}" class="img-fluid rounded" alt="">
                    </div>

                </div>
                @endforeach
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 col-center">

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-check-circle" style="color: #27ae60;"></i>
                            <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                  class="purecounter">1</span>
                                <p>Bitmiş layihələrimiz</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-clock" style="color: #bb0852;"></i>
                            <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                  class="purecounter">0</span>
                                <p>Davam edən layihələrimiz</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Counts Section -->

    </main>
@endsection
@section('webLabs.js')
    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
    <script data-cfasync="false" src="{{ asset('webLabs/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">

    </script><script src="{{ asset('webLabs/static/vendor/aos/aos.js') }}"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="{{ asset('webLabs/static/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <!-- <script src="assets/vendor/purecounter/purecounter.js"></script> -->
    <script src="{{ asset('webLabs/static/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('webLabs/static/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('webLabs/static/js/main.js') }}"></script>
    <script src="{{ asset('webLabs/static/js/image_slider.js') }}"></script>
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- <script src="assets/js/popper.js"></script> -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('webLabs/static/js/owl.carousel.min.js') }}"></script>
@endsection
