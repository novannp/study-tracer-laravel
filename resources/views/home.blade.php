  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>SISTEM INFORMASI TRACER STUDY ITG</title>
      <meta content="" name="description">

      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="img/favicon.png" rel="icon">
      <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link
          href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="{{ asset('theme/vendor/aos/aos.css') }}" rel="stylesheet">
      <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('theme/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('theme/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <link href="{{ asset('theme/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
      <link href="{{ asset('theme/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

      <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top">
          <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

              <a href="/" class="logo d-flex align-items-center">
                  {{-- <img src="assets/img/logo.png" alt=""> --}}
                  <span>Tracer Study</span>
              </a>

              <nav id="navbar" class="navbar">
                  <ul>
                      <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                      <li><a class="nav-link scrollto" href="#about">Statistik</a></li>
                      <li><a class="nav-link scrollto" href="#services">Lowongan Pekerjaan</a></li>
                      <li><a class="nav-link scrollto" href="#portfolio">Tentang</a></li>
                      <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->

          </div>
      </header><!-- End Header -->

      <section id="hero" class="hero d-flex align-items-center">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 d-flex flex-column justify-content-center">
                      <h1 data-aos="fade-up">Sistem Informasi Tracer Study Alumni Institut Teknologi Garut</h1><br>
                      <h4 data-aos="fade-up" data-aos-delay="400">Selamat datang di Laman Tracer Study. Direktorat
                          Pembelajaraan dan Kemahasiswaan. Direktorat Jendral Pendidikan Tinggi. Laman ini diperuntukkan
                          untuk mengelola data hasil tracer study yang dilaksanakan oleh Perguruan Tinggi di Indonesia.
                      </h4>
                      <div data-aos="fade-up" data-aos-delay="600">
                          <div class="text-center text-lg-start">
                              <a href="/login"
                                  class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                  <span>Masuk</span>
                                  <i class="bi bi-arrow-right"></i>
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-5 hero-img" data-aos="zoom-out" data-aos-delay="200">
                      <img src="{{ asset('theme/images/logo_itg.png') }}" class="img-fluid" alt="">
                  </div>
              </div>
          </div>

      </section>

      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
          <div class="footer-top">
              <div class="container">
                  <div class="row gy-4">
                      <div class="col-lg-5 col-md-12 footer-info">
                          <a href="index.html" class="logo d-flex align-items-center">
                              <img src="assets/img/logo.png" alt="">
                              <span>Tracer Study</span>
                          </a>
                          <p>Sistem Informasi Tracer Study Alumni Institut Teknologi Garut</p>
                          <div class="social-links mt-3">
                              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                              {{-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
                          </div>
                      </div>

                      <div class="col-lg-2 col-6 footer-links">

                      </div>

                      <div class="col-lg-2 col-6 footer-links">
                          <h4>Navigasi</h4>
                          <ul>
                              <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                              <li><i class="bi bi-chevron-right"></i> <a href="#">Statistik</a></li>
                              <li><i class="bi bi-chevron-right"></i> <a href="#">Lowongan Kerja</a></li>
                              <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang</a></li>
                              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                          </ul>
                      </div>

                      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                          <h4>Kontak</h4>
                          <p>
                              Jl. Mayor Syamsu No.1 Desa. Jayaraga <br>
                              Kec. Tarogong Kidul, Garut 44151<br>
                              Jawa Barat, Indonesia <br><br>
                              <strong>Telepon:</strong> +62 85222884009<br>
                              <strong>Email:</strong> info@itg.ac.id<br>
                          </p>

                      </div>

                  </div>
              </div>
          </div>

          <div class="container">
              {{-- <div class="copyright">
        &copy; Copyright <strong><span>Institut Teknolog</span></strong>. All Rights Reserved
      </div> --}}
              <div class="credits">
                  <!-- All the links in the footer should remain intact. -->
                  <!-- You can delete the links only if you purchased the pro version. -->
                  <!-- Licensing information: https://bootstrapmade.com/license/ -->
                  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
          </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
              class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset('theme/vendor/purecounter/purecounter_vanilla.js') }}"></script>
      <script src="{{ asset('theme/vendor/aos/aos.js') }}"></script>
      <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('theme/vendor/glightbox/js/glightbox.min.js') }}"></script>
      <script src="{{ asset('theme/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('theme/vendor/swiper/swiper-bundle.min.js') }}"></script>
      <script src="{{ asset('theme/vendor/php-email-form/validate.js') }}"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('theme/js/main.js') }}"></script>

  </body>

  </html>
