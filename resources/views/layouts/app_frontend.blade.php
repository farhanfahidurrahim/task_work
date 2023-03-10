<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('public/frontend') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('public/frontend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('public/frontend') }}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('public/frontend') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('public/frontend') }}/assets/css/style.css" rel="stylesheet">

</head>

<body>

@include('layouts.frontend_navbar')

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('public/frontend') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('public/frontend') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('public/frontend') }}/assets/js/main.js"></script>

</body>

</html>
