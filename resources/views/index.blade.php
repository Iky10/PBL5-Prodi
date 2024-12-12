<<<<<<< HEAD
@extends('layouts.landing.index')

@section('content')
<section id="hero" class="hero section">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active">
        <img src="assets/img/Slider1.png" alt="">
        <div class="carousel-container">
          {{-- <h2>Selamat Datang di Program Studi <span>Teknologi Rekayasa Perangkat Lunak</span></h2> --}}
          {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
          {{-- <a href="about.html" class="btn-get-started">Mulai</a> --}}
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
        <div class="carousel-container">
          <h2>Jurusan <span>Rekayasa dan Komputer</span></h2>
          {{-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> --}}
          <a href="about.html" class="btn-get-started">Mulai</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
        <div class="carousel-container">
          <h2>Politeknik Pertanian Negeri Samarinda</h2>
          {{-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> --}}
          <a href="about.html" class="btn-get-started">Mulai</a>
        </div>
      </div><!-- End Carousel Item -->

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <div class="featured container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4><a href="" class="stretched-link">Akreditasi</a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Jadwal Kuliah</a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div><!-- End Featured Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4><a href="" class="stretched-link">Informasi Beasiswa</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div><!-- End Featured Item -->

      </div>

    </div>

  </section><!-- /Hero Section -->

  <!-- About Section -->
  <section id="about" class="section about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/aaron-ikbaar.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 order-2 order-lg-1 content">
          <div class="container section-title" data-aos="fade-up">
            {{-- <h2>10 Alasan Mengapa Masuk Teknologi Rekayasa Perangkat Lunak</h2> --}}
          <h3>10 Alasan Mengapa Masuk Teknologi Rekayasa Perangkat Lunak</h3>
          <div class="underline"></div>
          {{-- <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> --}}
          <ul>
            @foreach ($alasan as $item)
            <li><i class="bi bi-check2-circle"></i><span>{{ $item->name }}</span></li>

            @endforeach

          </ul>
          {{-- <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
          </p> --}}
        </div>
=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Teknologi Rekayasa Perangkat Lunak</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/LogoTRPL.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Eterna
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">admintrpl@politanisamarinda.ac.id</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0541) 260421, 260680</span></i>
        </div>
        {{-- <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div><!-- End Top Bar -->

    <div class="branding">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/LogoTRPL.png" alt="">
          <h1 class="sitename">TRPL<br></h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Sejarah</a></li>
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
                <li><a href="#">Dosen</a></li>
                <li><a href="#">PLP & Admin</a></li>
                <li><a href="#">Akreditasi</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Kalender Akademik</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Jadwal Kuliah</a></li>
                <li><a href="#">Informasi Beasiswa</a></li>
              </ul>
            <li><a href="#">Pengumuman</a></li>
            <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Lab Rekayasa Perangkat Lunak</a></li>
                <li><a href="#">Lab Jaringan Komputer</a></li>
                <li><a href="#">Lab Hardware</a></li>
              </ul>
              <li><a href="contact.html">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

>>>>>>> 419ecd480b7780f79e879656282cabb7ae4ca38c
      </div>

    </div>

<<<<<<< HEAD
  </section><!-- /About Section -->

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Pengumuman</h2>
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Nesciunt Mete</h3>
            </a>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Eosle Commodi</h3>
            </a>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Ledo Markt</h3>
            </a>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div><!-- End Service Item -->

        {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Asperiores Commodit</h3>
            </a>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Velit Doloremque</h3>
            </a>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="#" class="stretched-link">
              <h3>Dolori Architecto</h3>
            </a>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div> --}}

  </section><!-- /Services Section -->

  {{-- {{-- <!-- Clients Section --> --}}
  <section id="clients" class="section clients">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Partnership</h2>
      {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p> --}}
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/Huawei-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Oracle-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/dicoding-logo-square.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Kemkominfo-Logo.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/GreenNusa-Logo.jpg" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/Britech-Logo.png" class="img-fluid" alt=""></div>
          {{-- <div class="swiper-slide"><img src="assets/img/" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/" class="img-fluid" alt=""></div> --}}
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Clients Section --> --
  @endsection
=======
  </header>

  <main class="main">

    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="carousel-container">
            <h2>Selamat Datang di Program Studi <span>Teknologi Rekayasa Perangkat Lunak</span></h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> --}}
            <a href="about.html" class="btn-get-started">Mulai</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="carousel-container">
            <h2>Jurusan <span>Rekayasa dan Komputer</span></h2>
            {{-- <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p> --}}
            <a href="about.html" class="btn-get-started">Mulai</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Politeknik Pertanian Negeri Samarinda</h2>
            {{-- <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p> --}}
            <a href="about.html" class="btn-get-started">Mulai</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <div class="featured container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Akreditasi</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Jadwal Kuliah</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Featured Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="featured-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="" class="stretched-link">Informasi Beasiswa</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Featured Item -->

        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="section about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <div class="container section-title" data-aos="fade-up">
              {{-- <h2>10 Alasan Mengapa Masuk Teknologi Rekayasa Perangkat Lunak</h2> --}}
            <h3>10 Alasan Mengapa Masuk Teknologi Rekayasa Perangkat Lunak</h3>
            <div class="underline"></div>
            {{-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Satu</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Dua</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Tiga</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Empat</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Lima</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Enam</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Tujuh</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Delapan</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Sembilan</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Sepuluh</span></li>
            </ul>
            {{-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            </p> --}}
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengumuman</h2>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Nesciunt Mete</h3>
              </a>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Eosle Commodi</h3>
              </a>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Ledo Markt</h3>
              </a>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Asperiores Commodit</h3>
              </a>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Velit Doloremque</h3>
              </a>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Dolori Architecto</h3>
              </a>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    {{-- <!-- Clients Section -->
    <section id="clients" class="section clients">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section --> --}}

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">TRPL</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Politeknik Pertanian Negeri Samarinda</p>
            <p>Jalan Sam Ratulangi, Kec. Samarinda Seberang</p>
            <p>Kota Samarinda, Kalimantan Timur 75242</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(0541) 260421, 260680</span></p>
            <p><strong>Email:</strong> <span>admintrpl@politanisamarinda.ac.id</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan Cepat</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Profil</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Akademik</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pengumuman</a></li>
          </ul>
        </div>

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-4 col-md-12">
          <h4>Sosial Media Kami</h4>
          {{-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> --}}
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-tiktok"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Teknologi Rekayasa Perangkat Lunak</strong></strong><span>-</span><strong class="px-1 sitename">Politeknik Pertanian Negeri Samarinda</strong></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{asset ('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{asset ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{asset ('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{asset ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset ('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
>>>>>>> 419ecd480b7780f79e879656282cabb7ae4ca38c
