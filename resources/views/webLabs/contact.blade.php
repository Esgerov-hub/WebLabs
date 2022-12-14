@extends('layouts.app')
@section('webLabs.css')
    <title>WebLabs | Contact</title>
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
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Əlaqə</h2>
            </div>
            @if(session()->has('messages'))
                <div class="alert alert-success">
                    {{ session()->get('messages') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                </div>
            @endif

            <div class="contact-bg" style="background-image: url('{{asset('webLabs/static/img/contact-bg.png')}}')">
                <div class="row col-center">
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex">
                        <form method="POST" action="{{ route('webLabs.contact.store') }}" class="php-email-form">
                            @csrf
                            <input type="hidden" name="csrfmiddlewaretoken" value="pfDaVkLlyB7tXCw5Qlg04JvIhXeQ6JsYk6zpczNBgUd6uFMEF3QC5Hy7H5DBppYp">
                            <div class="row">
                                <div class="form-group col-md-6 pb-3">
                                    <label for="name">Ad</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Ad.." required id="id_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="surname">Soyad</label>
                                    <input type="text" name="surname" value="{{ old('surname') }}" class="form-control @error('surname') is-invalid @enderror" placeholder="Soyad.." required id="id_surname">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Mobil nömrə</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="nümunə: +994 ** *** ** **" required id="id_email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-ünvan</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="nümunə@gmail.com" required id="id_email">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="messages">Mesaj</label>
                                <textarea name="messages" cols="40" rows="10" class="form-control @error('messages') is-invalid @enderror" placeholder="Mesaj..." required id="id_message">{{ old('messages') }}</textarea>
                            </div>
                            <div class="text-center pt-3 pb-3">
                                <button type="submit" class="btn-get-started">Göndərin
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
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
