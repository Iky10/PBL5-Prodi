<header id="header" class="header sticky-top" >

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">adminthp@politanisamarinda.ac.id</a></i>
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
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/logo thp.png') }}" alt="/">
          <h1 class="sitename">THP<br></h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Sejarah</a></li>
                <li><a href="#">Visi & Misi</a></li>
                <li><a href="#">Struktur Organisasi</a></li>
                <li><a href="#">Dosen</a></li>
                <li><a href="{{ route('admin.dosen.index') }}">PLP & Admin</a></li>
                <li><a href="#">Akreditasi</a></li>
                <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('lab.tanah_air') }}">-</a></li>
                    <li><a href="{{ route('lab.persemaian') }}">-</a></li>
                    <li><a href="{{ route('lab.silfikutur') }}">-</a></li>
                    <li><a href="{{ route('lab.konservasi') }}">-</a></li>
                    <li><a href="{{ route('lab.sosial_ekonomi') }}">-</a></li>
                    <li><a href="{{ route('lab.perencanaan') }}">-</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Kalender Akademik</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Jadwal Kuliah</a></li>
                <li><a href="#">Informasi Beasiswa</a></li>
                <li><a href="{{ route('output-lulusan.index') }}">Output Lulusan</a></li>
              </ul>
              <li class="dropdown"><a href="#"><span>Prestasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">-</a></li>
                  <li><a href="#">-</a></li>
                  <li><a href="#">-</a></li>
                </ul>

            <li><a href="{{ route('berita-lainnya') }}">MAP</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

      </div>

    </div>

  </header>
