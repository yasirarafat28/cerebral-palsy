<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8" />


    {!! SEO::generate() !!}

  <!-- Favicons -->
  <link href="/front/img/favicon.png" rel="icon">
  <link href="/front/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/front/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/front/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/front/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/front/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/front/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/front/vendor/aos/aos.css" rel="stylesheet">

  @yield('style')

  <!-- Template Main CSS File -->
  <link href="/front/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now  <a class="ml-4 text-white" href="tel:{{env('APP_PHONE')}}">{{env('APP_PHONE')}}</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{url('/')}}" class="logo mr-auto"><img src="/front/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="{{url('/')}}">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/about-us')}}">Know us</a></li>
            <li><a href="{{url('cp-treatment')}}">CP Treatment</a></li>
            <li><a href="{{url('media')}}">Media Release</a></li>
            <li><a href="{{url('testimonials')}}">Happy Patients</a></li>
            <li><a href="{{url('/contact-us')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('/appointment')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

            @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="footer-info">
                  <h3>{{env('APP_NAME')}}</h3>
                  <p>{{env('APP_ADDRESS')}}<br><br>
                    <strong>Phone:</strong> <a class="ml-4 text-white" href="tel:{{env('APP_PHONE')}}">{{env('APP_PHONE')}}</a><br>
                    <strong>Email:</strong> {{env('APP_EMAIL')}}<br>
                  </p>
                  <div class="social-links mt-3">
                    <a href="{{env('APP_TWITTER')}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="{{env('APP_FACEBOOK')}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{env('APP_INSTAGRAM')}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="{{env('APP_SKYPE')}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="{{env('APP_LINKEDIN')}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
              </div>
          <div class="col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>

                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/about-us')}}">Know us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('cp-treatment')}}">CP Treatment</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('media')}}">Media Release</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('testimonials')}}">Happy Patients</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/contact-us')}}">Contact</a></li>
            </ul>
          </div>


          <div class="col-md-4 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{env('APP_NAME')}}</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="/front/vendor/jquery/jquery.min.js"></script>
  <script src="/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/front/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/front/vendor/php-email-form/validate.js"></script>
  <script src="/front/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/front/vendor/counterup/counterup.min.js"></script>
  <script src="/front/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/front/vendor/venobox/venobox.min.js"></script>
  <script src="/front/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/front/js/main.js"></script>

  @yield('script')

</body>

</html>
