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
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#facilities" class="nav-item nav-link">Sekolah</a>
                    <a href="#about" class="nav-item nav-link">Visi & Misi</a>
                    <a href="#classes" class="nav-item nav-link">Program</a>
                    <a href="#teachers" class="nav-item nav-link">Pengelola</a>
                    <a href="repo.sit-iqm.my.id/blogs" class="nav-item nav-link">Kegiatan</a>
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
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-4.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2 ml-4">Generasi Insan Qur'ani Mulia
                                    </h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-3.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-6.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-5.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-7.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-8.jpg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-9.jpeg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
                                    {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('profil/img/carousel-10.jpeg ') }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Sekolahnya Penghafal
                                        Qur'an</h1>
                                    <h3 class="fs-5 fw-medium text-white mb-4 pb-2">Generasi Insan Qur'ani Mulia</h3>
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
                    <h1 class="mb-3">SIT Insan Qur'ani Mulia Bima</h1>
                    <p>Merupakan Salah Satu Cabang dari <strong>SIT Insan Qur'ani Mulia </strong> yang Berpusat di
                        Lombok Tengah. Saat ini Sudah Terbentuk dua Tingkatan Sekolah Yaitu TK dan SD.
                        Adapun Siswanya Berasal dari Berbagai Latar Belakang Sosial yang Tersebar Hampir Diseluruh
                        Kecamatan Sape dan Lambu. Dalam Perkembangannnya, <strong> SIT Insan Qur'ani Mulia Bima
                        </strong> mendapatkan respon Positif dari Berbagai Elemen Masyarakat yang Mana Hal Ini dilihat
                        dari Jumlah Peserta Didik yang Mengalami Peningkatan Setiap Tahunnya, Disamping itu juga
                        <strong> SIT Insan Qur'ani Mulia Bima </strong> Menawarkan Berbagai Program Unggulan yang
                        Hasilnya Memberikan Dampak Positif Pada Perubahan Akhlak atau Karakter yang Islami.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                {{-- <span class="bg-primary"></span> --}}
                                <i class="fa fa-school fa-3x text-primary"></i>
                                {{-- <span class="bg-primary"></span> --}}
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">Sekolah Islam</h3>
                                <p class="mb-0">Sekolah Penghafal Al-Qur'an yang Berkarakter Islami dan Berbasis
                                    Digital</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                {{-- <span class="bg-success"></span> --}}
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                {{-- <span class="bg-success"></span> --}}
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Tempat Bermain</h3>
                                <p class="mb-0">Menggunakan Alam Sebagai Sarana Bermain dan Belajar Anak</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Healthy Canteen</h3>
                                <p class="mb-0">Eirmod sed ipsum dolor sit rebum magna erat lorem kasd vero ipsum sit</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                {{-- <span class="bg-info"></span> --}}
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                {{-- <span class="bg-info"></span> --}}
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Pendidik Kompeten</h3>
                                <p class="mb-0">Pendidik (Ustad/Ustadzah) yang Memiliki Kompetensi Keilmuan yang
                                    Memadai Serta Penyayang Pada Anak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="mb-4">Membentuk Anak-anak yang Berilmu dan Berakhlak Qur'ani</h2>
                        <h2 class="">Visi</h2>
                        <p class="mb-4">Terwujudnya Anak-anak yang Berilmu dan Berakhlak Mulia</p>
                        <h2 class="">Misi</h2>
                        <ol>
                            <li>
                                <p class="">Memberikan Pengasuhan dan Pembimbingan Bagi Anak-anak Usia Dini</p>

                            </li>
                            <li>
                                <p class="">Membentuk Karakter Qur'ani dan Kemandirian </p>

                            </li>
                            <li>
                                <p class="">Membimbing Agar Bisa Mandiri dan Memahami Diri Sendiri, Orang Lain
                                    dan Lingkungan</p>

                            </li>
                            <li>
                                <p class="">Melibatkan dan Meningkatkan Partisipasi Masyarakat Baik Pemerintah
                                    Maupun Swasta Terhadap Pelayanan Pendidikan</p>

                            </li>
                        </ol>
                        {{-- <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos, ipsum labore duo duo sit no sea diam. Et dolor et kasd ea. Eirmod diam at dolor est vero nonumy magna.</p> --}}
                        <div class="row g-4 align-items-center">
                            {{-- <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                            </div> --}}
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    {{-- <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/user.jpg ') }}" alt="" style="width: 65px; height: 65px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Jhon Doe</h6>
                                        <small>CEO & Founder</small>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3"
                                    src="{{ asset('profil/img/about-7.jpg ') }}" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('profil/img/about-5.jpg ') }}" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('profil/img/about-8.jpg ') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('profil/img/action-2.jpg ') }}" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Mengajar Al-Qur'an</h1>
                                <p class="mb-4">Melalui Metode Menghafal, Murojaah, Tasmi', dan Tahsin agar Lahir
                                    Generasi Qur'ani yang Lancar dan Fasih Membaca Al-Qur'an.
                                </p>
                                {{-- <a class="btn btn-primary py-3 px-5" href="">Get Started Now<i class="fa fa-arrow-right ms-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5" id="classes">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Kegiatan Sekolah</h1>
                    <p>Kegiatanku Di Sekolah yang Mendidik dan Membimbingku</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/class-10.jpg ') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Membaca Al-Qur'an</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-5.jpeg ') }}" alt="" style="width: 60px; height: 60px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Mardiana, S.Pd.I</h6>
                                           
                                        </div> --}}
                                    </div>
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/outbond.jpg ') }}"
                                    alt="" height="45px;">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Outbond</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-4.jpg ') }}" alt="" style="width: 60px; height: 60px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Hajnah, S.E</h6>
                                           
                                        </div> --}}
                                    </div>
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/class-1.jpg ') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Outdoor Learning</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    {{-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-1.jpg ') }}" alt="" style="width: 60px; height: 60px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Nurinayah S.S</h6>
                                            {{-- <small>Teacher</small> 
                                        </div>
                                    </div> 
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/class-3.jpg ') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Pelajaran Tematik</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    {{-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-5.jpeg ') }}" alt="" style="width: 60px; height: 60px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Mardiana, S.Pd.I</h6>
                                            {{-- <small>Teacher</small> -
                                        </div>
                                    </div> --}}
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/class-5.jpg ') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Wudhu & Shalat</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-2.jpeg ') }}" alt="" style="width: 60px; height: 60px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Hardianti S.Sos</h6>
                                            {{-- <small>Teacher</small> 
                                        </div> --}}
                                    </div>
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('profil/img/class-7.jpg ') }}"
                                    alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Haji & Umrah</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        {{-- <img class="rounded-circle flex-shrink-0" src="{{ asset('profil/img/guru-6.jpg ') }}" alt="" style="width: 65px; height: 65px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Sri Rukaya S.Sos</h6>
                                            {{-- <small>Teacher</small> 
                                        </div> --}}
                                    </div>
                                    {{-- <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$99</span> --}}
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Age:</h6>
                                            <small>3-5 Years</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>9-10 AM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>30 Kids</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classes End -->





        <!-- Team Start -->
        <div class="container-xxl py-5 mb-5" id="teachers">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Pengelola SIT Insan Qur'ani Mulia Bima</h1>
                    {{-- <p>Ustadzah-ustadzahku yang Selalu Sabar Mengajari dan Mendidikku serta Penuh Kasih.</p> --}}
                </div>
                <div class="row g-4">
                    {{-- Direktur --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-4.jpg ') }}" alt="">
                            <div class="team-text">
                                <h3>Hajnah, S.E</h3>
                                <p>Kepala Sekolah </p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-11.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Muthmainnah, M.Pd</h3>
                                <p>Direktur </p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-4.jpg ') }}" alt="">
                            <div class="team-text">
                                <h3>Hajnah, S.E</h3>
                                <p>Kepala Sekolah </p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-4.jpg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Hajnah, S.E</h3>
                                <p>Kepala Sekolah </p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Perangkat Sekolah --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp ml-2" data-wow-delay="0.1s">
                        {{-- <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-1.jpg ') }}" alt="">
                            <div class="team-text">
                                <h3>Nurinayah, S.S</h3>
                                <p>Bendahara</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp mr-2" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-5.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Mardiana, S.Pd.I</h3>
                                <p>Pembina Tahfidz</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-1.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Nurinayah, S.S</h3>
                                <p>Bendahara</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-9.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Yayu<br> Wahyuni, S.E</h3>
                                <p>Tata Usaha</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-2.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Hardianti, S.Sos </h3>
                                <p>Humas</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Guru Biasa --}}

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-7.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Lilis <br>
                                    Rahmawati, S.Pd</h3>
                                <p>Ustadzah</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-6.jpg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Sri Rukaya, S.Sos</h3>
                                <p>Ustadzah</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-8.jpeg ') }}"
                                alt="">
                            <div class="team-text">
                                <h3>Sita Erlina, S.Pd</h3>
                                <p>Ustadzah</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="{{ asset('profil/img/guru-10.jpeg ') }}"
                                alt="">
                            <div class="team-text col-sm-12">

                                <h3>Insan Nursyahid Kurniawan, S.Pd</h3>
                                <p>Ustadz</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 mt-7">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Cerita Orang Tua!</h1>
                    <p>Cerita Kesan Serta Masukkan dari Orang Tua dari para Siswa untuk Sekolah Setelah Anak-anak
                        Belajar di SIT IQM Bima.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Kami Sangat Senang Melihat Anak Kami Bisa Bermain dan Belajar dalam
                            Lingkungan yang Islami dan Terdidik </p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('profil/img/logo.jpeg ') }}" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Orang Tua Siswa</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Saya Sebagai Orang Tua Tentunya Senang Bahagia Melihat Anak Saya Menjadi Anak
                            yang Lancar Membaca dan Menghafal Al-Qur'an</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('profil/img/logo.jpeg ') }}" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Orang Tua Siswa</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">Kehadiran SIT Insan Qur'ani Mulia Tentunya Membantu Kami untuk Lebih
                            Mengenalkan Anak Kami dengan Islam Sejak Dini</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ asset('profil/img/logo.jpeg ') }}" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Orang Tua Siswa</h3>
                                <span>Profession</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Appointment Start -->
        <div class="container-xxl py-5" id="contact">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Beri Kami Saran</h1>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname"
                                                    placeholder="Nama">
                                                <label for="gname">Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="gmail"
                                                    placeholder="Email">
                                                <label for="gmail"> Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname"
                                                    placeholder="Telepon">
                                                <label for="cname">Telepon</label>
                                            </div>
                                        </div>
                                        {{--  <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                <label for="cage">Child Age</label>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Masukkan Saran" id="message" style="height: 100px"></textarea>
                                                <label for="message">Saran</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded"
                                    src="{{ asset('profil/img/appointment-2.jpg ') }}" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

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
