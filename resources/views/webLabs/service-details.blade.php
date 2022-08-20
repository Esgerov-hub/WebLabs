@extends('layouts.app')
@section('webLabs.css')
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
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a class="" href="{{ route('webLabs.index') }}">Əsas səhifə</a></li>
                <li>{!! $service->title !!}</li>
            </ol>
            <h2>{!! $service->title !!}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">
        <!-- ======= Site Services Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-12">
                        {!! $service->text !!}
{{--                        <div class="portfolio-description">--}}
{{--                            <h4>Landing page(1-4 səhifəlik saytlar üçün nəzərdə tutulur)--}}
{{--                            </h4>--}}
{{--                            <ul>--}}
{{--                                <li>Kiçik biznes sahibləri və öz işini göstərmək istəyən insanlar üçün nəzərdə tutulmuşdur.--}}
{{--                                </li>--}}
{{--                                <li>Tədbirlər üçün afişə səhifəsi olaraq</li>--}}
{{--                                <li>Yeni məhsul üçün-kütləvi e-mail göndərişlərində ətraflı tanıtım məqsədilə.</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-description">--}}
{{--                            <h4>Vizitka saytlar (əsasən məlumat xarakterli saytlar üçün nəzərdə tutur).--}}
{{--                            </h4>--}}
{{--                            <ul>--}}
{{--                                <li>Kicik biznes sahibləri--}}
{{--                                </li>--}}
{{--                                <li>Fiziki şəxslər</li>--}}
{{--                                <li>Startaplar</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-description">--}}
{{--                            <h4>Korporativ saytlar</h4>--}}
{{--                            <p>--}}
{{--                                Korporativ şirkətlərin onlayn məkandakı magazini və ya mall u kimi görə bilərsiniz.--}}
{{--                                Müştərilər burdan özlərinə lazım olanı alır.Korporativ saytlar şirkətin imici və--}}
{{--                                prestiji üçün çox önəmli və böyük əhəmiyyət kəsb eliyir.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-description">--}}
{{--                            <h4>Promo saytlar</h4>--}}
{{--                            <p>--}}
{{--                                Bir fiziki və ya hüququ şəxsin öz məhsulu üçün yaratmış olduğu reklam saytıdır.--}}
{{--                                Promo saytların əsas üstünlüyü şirkət haqqında ümumi məlumat,şirkətin məhsulunun reklamı və s. Kimi--}}
{{--                                xüsusiyyətlər aiddir--}}
{{--                            </p>--}}
{{--                        </div>--}}
                    </div>

                </div>

            </div>
        </section><!-- End Site Services Section -->

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
