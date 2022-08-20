@extends('layouts.app')
@section('webLabs.css')
    <title>WebLabs | Home</title>
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
    <link href="{{ asset('webLabs/tatic/vendor/glightbox/css/glightbox.min.css')  }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('webLabs/static/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webLabs/static/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css' %}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('webLabs/static/css/style.css') }}" rel="stylesheet">
@endsection
@section('webLabs.content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up"><i>Veb saytların hazırlanması</i></h1>
                    <h2 data-aos="fade-up" data-aos-delay="400"><span>Öz Biznesinizi onlayn məkanda tanıtmaq üçün bizim
                        peşəkar komandanın xidmətlərindən yararlana bilərsiz.Bizim missiyamız ən müasir texnoloji həllər
                        ilə VEB səhifələrin hazırlanmasıdır.</span></h2>
                    <h4 class="pt-3" data-aos="fade-up" data-aos-delay="500">İşiniz İşimizdir!</h4>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="">
                            <a href="contact.html" target="blank_"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center rounded">
                                <span>Bizə Müraciət Edin</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>Xİdmətlər</h3>
                    <p>Təklif etdiyimiz xidmətlər xüsusi olaraq və bütün texnoloji ehtiyaclar nəzərə alınaraq
                        formalaşdırılmışdır.
                    </p>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-lg-4 mt-4 mt-lg-0 pb-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($service->image) }}" class="img-fluid" alt="">
                            <h3><a href="{{ route('webLabs.serviceDetails',$service->title) }}">{{ $service->title }}</a></h3>
                        </div>
                    </div>
                    @endforeach

                </div>
{{--                <div class="row col-center">--}}
{{--                    <div class="col-lg-4 mt-4 mt-lg-0 pb-4">--}}
{{--                        <div class="box" data-aos="fade-up" data-aos-delay="400">--}}
{{--                            <img src="{{ asset('webLabs/static/img/services-5.png') }}" class="img-fluid" alt="">--}}
{{--                            <h3><a href="dizayn-xidm%c9%99ti.html">Dizayn Xidməti</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-4 mt-4 mt-lg-0 pb-4">--}}
{{--                        <div class="box" data-aos="fade-up" data-aos-delay="600">--}}
{{--                            <img src="{{ asset('webLabs/static/img/services-6.png') }}" class="img-fluid" alt="">--}}
{{--                            <h3><a href="smm-xidm%c9%99ti.html">SMM Xidməti</a></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Son İşlərimiz</h3>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">


                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="media/portfolio_images/Background_1.html" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <a href="#">
                                    <h4>Gtib</h4>
                                </a>
                                <div class="portfolio-links">
                                    <a href="media/portfolio_images/Background_1.html" data-gallery="portfolioGallery"
                                       class="portfokio-lightbox"><i class="bi bi-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="text-center mt-5">
                    <a href="allprojects.html" class="btn-portfolio">Bütün işlərə bax</a>
                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h3>Qiymətlər</h3>
                    <p>Təklif etdiyimiz xidmətlər xüsusi olaraq və bütün texnoloji ehtiyaclar nəzərə alınaraq
                        formalaşdırılmışdır.
                    </p>
                </div>

                <div class="row gy-4 col-center" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="box-header silver">
                                <h3>SİLVER PAKET</h3>
                            </div>
                            <div class="price"><sup>₼</sup>499</span></div>
                            <img src="assets/img/pricing-free.html" class="img-fluid" alt="">
                            <table class="table">
                                <tr>
                                    <th style="text-align: left;">Texniki dəstək</th>
                                    <td>4 ay</td>
                                </tr>
                                <tr>
                                    <th>Responsivlilik</th>
                                    <td>Var</td>
                                </tr>
                                <tr>
                                    <th>İdarə paneli</th>
                                    <td>Sizə özəl</td>
                                </tr>
                                <tr>
                                    <th>Seo Optimizasyon</th>
                                    <td>Daxildir</td>
                                </tr>
                            </table>
                            <div>
                                <a href="contact.html" class="btn-buy btn-silver">SİFARİŞ ET</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="box-header gold">
                                <h3>GOLD PAKET</h3>
                            </div>
                            <div class="price"><sup>₼</sup>699-1499</span></div>
                            <img src="assets/img/pricing-free.html" class="img-fluid" alt="">
                            <table class="table">
                                <tr>
                                    <th style="text-align: left;">Texniki dəstək</th>
                                    <td>8 ay</td>
                                </tr>
                                <tr>
                                    <th>Responsivlilik</th>
                                    <td>Var</td>
                                </tr>
                                <tr>
                                    <th>İdarə paneli</th>
                                    <td>Sizə özəl</td>
                                </tr>
                                <tr>
                                    <th>Seo Optimizasyon</th>
                                    <td>Daxildir</td>
                                </tr>
                            </table>
                            <a href="contact.html" class="btn-buy btn-gold">SİFARİŞ ET</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <div class="box-header premium">
                                <h3>PLATİN PAKET</h3>
                            </div>
                            <div class="price"><sup>₼</sup>1500+</span></div>
                            <img src="assets/img/pricing-free.html" class="img-fluid" alt="">
                            <table class="table">
                                <tr>
                                    <th style="text-align: left;">Texniki dəstək</th>
                                    <td>12 ay</td>
                                </tr>
                                <tr>
                                    <th>Responsivlilik</th>
                                    <td>Var</td>
                                </tr>
                                <tr>
                                    <th>İdarə paneli</th>
                                    <td>Sizə özəl</td>
                                </tr>
                                <tr>
                                    <th>Seo Optimizasyon</th>
                                    <td>Daxildir</td>
                                </tr>
                            </table>
                            <a href="contact.html" class="btn-buy btn-premium">SİFARİŞ ET</a>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Pricing Section -->

    </main><!-- End #main -->
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

