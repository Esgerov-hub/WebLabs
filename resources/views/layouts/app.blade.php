<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webLabs.az/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 19:17:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="İnkişaf etməkdə olan onlayn sektor hər brendin Veb səhifələrinin olmasına dəlalət yaradır. Keyfiyyətli məhsullari ən qısa zamanda təmin edirik..." name="description">
    <meta content="tDX4Khe8jjwSW_7nHsTxLcoi2E6MCg-VM5VkpZEbREo" name="google-site-verification">

    @yield('webLabs.css')

</head>

<body>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:infor@weblabs.az" class="__cf_email__" data-cfemail="c7aea9a1a887b0a2a5aba6a5b4e9a6bd">info@weblabs.az</a>
            <i class="bi bi-phone-fill phone-icon"></i> +994 50 875 69 17
        </div>
        <div class="social-links d-none d-md-block">
            <a href="https://www.facebook.com/profile.php?id=100080791221827" class="facebook" target="_blank"><i class="bi bi-facebook fa-lg"></i></a>
            <a href="https://www.instagram.com/weblabs.az/" class="instagram" target="_blank"><i class="bi bi-instagram fa-lg"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto">
            <a href="{{ route('webLabs.index') }}" class="logo">
                <img src="{{ asset('webLabs/static/img/logo.png') }}" alt="" class="img-fluid">
            </a>
        </h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="" href="{{ route('webLabs.index') }}">Əsas səhifə</a></li>
                <li><a class="" href="{{ route('webLabs.about') }}">Haqqımızda</a></li>
                <li><a class="" href="{{ route('webLabs.service') }}">Xidmətlər</a></li>
{{--                <li class="dropdown"><a href="services.html">Xidmətlər<i class="bi bi-chevron-down"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="saytlar%c4%b1n-haz%c4%b1rlanmas%c4%b1.html">Saytların Hazırlanması</a></li>--}}
{{--                        <li><a href="texniki-d%c9%99st%c9%99k.html">Texniki Dəstək</a></li>--}}
{{--                        <li><a href="seo-xidm%c9%99ti.html">Seo Xİdməti</a></li>--}}
{{--                        <li><a href="dizayn-xidm%c9%99ti.html">Dizayn Xidməti</a></li>--}}
{{--                        <li><a href="smm-xidm%c9%99ti.html">Sosial Media və Google Reklamları</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <li><a class="" href="{{ route('webLabs.project') }}">İşlərimiz</a></li>
                <li><a class="" href="{{ route('webLabs.contact') }}">Əlaqə</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@yield('webLabs.content')

<footer id="footer" class="footer footer-bg">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4 footer-img">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="#" class="logo d-flex align-items-center">
                        <img src="{{ asset('webLabs/static/img/logo.png') }}" alt="">
                    </a>
                    <p>Bu şirkətin yaranmasında səbəb bazara yeni texnologiyalarla hazırlanmış layihələrlə
                        çıxmasıdır.Biz müştərilərin işinə öz işimiz kimi yanaşır və deyilən müddətdə işləri əksiksiz təqdim
                        edirik.</p>
                    <p>İşiniz İşimizdir</p>

                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/profile.php?id=100080791221827" class="facebook" target="_blank"><i class="bi bi-facebook fa-lg"></i></a>
                        <a href="https://www.instagram.com/weblabs.az/" class="instagram" target="_blank"><i class="bi bi-instagram fa-lg"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>SÜRƏTLİ KEÇİD</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webLabs.project') }} }}">Projects</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('webLabs.service') }}">Xidmətlər</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Qaydalar</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Texniki tapşırıq</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Müqavilə nüsxəsi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Təhlükəsizlik</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Əlaqə</h4>
                    <p>
                        <i class="bi bi-phone-fill"></i> +994(50) 875-69-17<br>
                        <i class="bi bi-envelope-fill"></i> <a href="mailto:infor@weblabs.az" class="__cf_email__" data-cfemail="127b7c747d526577707e7370613c7368">info@weblabs.az</a><br>
                    </p>

                </div>

            </div>
            <div class="copyright">
                &copy; Copyright 2022 <strong><span>WebLabs</span></strong>. Bütün Hüquqlar Qorunur.
            </div>

        </div>
    </div>

</footer><!-- End Footer -->


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

@yield('webLabs.js')
</body>


<!-- Mirrored from webLabs.az/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 19:18:03 GMT -->
</html>
