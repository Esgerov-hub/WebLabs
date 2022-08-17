@extends('layouts.app')
@section('webLabs.css')
    <title>WebLabs | Project</title>
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
    <link href="{{ asset('webLabs/static/vendor/aos/aos.css') }}" rel="stylesheet">
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
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-3">
                    <!-- search project -->
                    <div class="position-relative mb-5">
                        <form method="GET">
                            <input type="search" class="form-control rounded-0" placeholder="Axtar..." name="search">
                            <button type="submit" class="search-icon pr-3 r-0"><i class="fa-solid fa-magnifying-glass text-color"></i></button>
                        </form>
                    </div>
                    <!-- categories -->
                    <div class="mb-30">
                        <h4 class="mb-3">Kateqoriya</h4>
                        <ul class="pl-0 shop-list list-unstyled">
                            <li>
                                <a href="allprojects.html" class="d-flex py-2 text-gray justify-content-between">
                                    <span>All projects</span>
                                </a>
                            </li>

                            <li>
                                <a href="categories/websaytlar.html" class="d-flex py-2 text-gray justify-content-between">
                                    <span>Websaytlar</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- product-list -->
                <div class="col-lg-9">
                    <div class="row">
                        <!-- product -->


                        <div class="col-lg-6 col-sm-6 mb-4">
                            <div class="product text-center">
                                <div class="product-thumb">
                                    <div class="overflow-hidden position-relative">
                                        <a href="product-single.html">
                                            <img class="img-fluid w-100 mb-3 img-first" src="media/portfolio_images/Background_1.html"
                                                 alt="product-img">
                                            <!-- <img class="img-fluid w-100 mb-3 img-second" src="/media/portfolio_images/Background_1.png" alt="product-img"> -->
                                        </a>
                                    </div>
                                    <div class="product-hover-overlay">
                                        <a href="#" class="product-icon favorite" data-toggle="tooltip"
                                           data-placement="left" title="Wishlist"><i class="ti-heart"></i></a>
                                        <a href="#" class="product-icon cart" data-toggle="tooltip" data-placement="left"
                                           title="Compare"><i class="ti-direction-alt"></i></a>
                                        <a data-vbtype="inline" href="#quickView" class="product-icon view venobox"
                                           data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                class="ti-search"></i></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="h5"><a class="text-color" href="product-single.html">Gtib</a>
                                    </h3>
                                </div>

                            </div>
                        </div>


                        <!-- //end of product -->

                        <!-- pagination -->
                        <div class="col-12 mt-5">

                        </div>
                        <!-- //end of pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('webLabs.js')
    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
    <script data-cfasync="false" src="{{ asset('webLabs/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('webLabs/static/vendor/aos/aos.js') }}"></script>
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
