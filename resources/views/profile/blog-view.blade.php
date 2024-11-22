<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sekolah Islam Terpadu - Insan Qur'ani Mulia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="sit iqm Bima, sit, iqm, bima, islam terpadu, insan qur'ani mulia, insan, qurani, mulia"
        name="keywords">
    <meta content="sekolah islam terpadu insan qur'ani mulia bima" name="description">

    <!-- Favicon -->
    <link href="{{ asset('profil/img/logo.jpeg ') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('profil/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('profil/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('profil/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('profil/css/style.css') }}" rel="stylesheet">
</head>

<style>
    .btn-primary {
        color: #000;
        background-color: #ca0098;
        border-color: #ca0098;
    }
    @media (max-width: 400px) {
        .team-text{
            width: 50px;
        }
    }
</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h2 class="m-0 text-primary">
                    <img src="{{ asset('profil/img/logo.jpeg') }}" style="width: 60px;">
                    {{-- <i class="fa fa-book-reader me-3"></i> --}}
                    SIT Insan Qur'ani Mulia Bima
                </h2>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/#" class="nav-item nav-link active">Home</a>
                    <a href="/#facilities" class="nav-item nav-link">Sekolah</a>
                    <a href="/#about" class="nav-item nav-link">Visi & Misi</a>
                    <a href="/#classes" class="nav-item nav-link">Program</a>
                    <a href="/#teachers" class="nav-item nav-link">Pengelola</a>
                    <a href="/blogs" class="nav-item nav-link">Kegiatan</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.html" class="dropdown-item">School Facilities</a>
                            <a href="team.html" class="dropdown-item">Popular Teachers</a>
                            <a href="call-to-action.html" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.html" class="dropdown-item">Make Appointment</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                        </div>
                    </div> --}}
                    <a href="#contact" class="nav-item nav-link">Saran</a>
                </div>
                {{-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a> --}}
            </div>
        </nav>
        <!-- Navbar End -->

       

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('gambar-blog/'.$data['gambar']) }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    {{-- <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2 ml-4">Generasi Insan Qur'ani Mulia
                                    </h3> --}}
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-xxl py-5" id="facilities">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h1 class="mb-3">{{ $data['judul']}}</h1>
                    {!! $data['isi'] !!}
                </div>
                
            </div>
        </div>
        <!-- Facilities End -->

       

        {{-- Jln. Jenderal Sudirman RT 11 RW. 03 Dusun Rato Baru - Lambu Tlp. 082339177546 --}}
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl .Jend. Sudirman RT 11 RW. 03
                            Dusun Rato Baru - Lambu, Bima</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6282339177546</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>tkit@gmail.com</p>
                        <div class="d-flex pt-2">
                            {{-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a> --}}
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        {{-- <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a> 
                    </div> --}}
                    <div class="col-lg-3 col-md-6">
                        {{-- <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a> --}}
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Photo Gallery</h3>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gale-1.jpeg ') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gale-2.jpeg ') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gale-4.jpeg ') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gale-3.jpeg ') }}" alt="">
                            </div>

                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gale-5.jpeg ') }}" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1"
                                    src="{{ asset('profil/img/gal-6.jpg ') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">SIT Insan Qur'ani Mulia</a>, All Right
                            Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Template By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                {{-- <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('profil/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('profil/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('profil/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('profil/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('profil/js/main.js') }}"></script>
</body>

</html>
