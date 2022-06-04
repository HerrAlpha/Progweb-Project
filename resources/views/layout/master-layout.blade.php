<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templates - @yield('title')</title>
    <script defer src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/@yield('css')">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/assets/picture/Logo-nonText.png">
    <link rel="apple-touch-icon" href="/assets/picture/Logo-nonText.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/picture/Logo-nonText.png">
  <link rel="stylesheet" type="text/css" href="/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/css/gaya.css" />

  <!-- Template Main JS File -->

    <style>

    body, a, button{
        font-family: "SF Pro Text","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
        font-weight: semibold;
    }
    #1{
        font-family: "SF Pro Text","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
        font-weight: bold;
    }
    .nav-link, .navbar-brand{
        color: rgb(209, 209, 214);
    }
    .active{
        /* color: rgb(229, 229, 234); */
        color: rgb(209, 209, 214);
    }
 </style>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 98%">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="/assets/picture/Logo-nonText.png" width="50px" height="50px" class="d-inline-block align-text-top" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('web') ? 'active' : '' }}" aria-current="page" href="{{route('web')}}">Web Browser</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('mobileApp') ? 'active' : '' }}" href="{{route('mobileApp')}}">Mobile App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('desktopApp') ? 'active' : '' }}" href="{{route('desktopApp')}}">Desktop App</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('hybrid') ? 'active' : '' }}" href="{{route('hybrid')}}">Hybrid</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
          @yield('content')
      </div>
      <footer id="footer" class="footer" style="width: 100%">
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="/" class="logo d-flex align-items-center">
                  <img src="/assets/picture/Logo-nonText.png" alt="">
                  <span>UKlise</span>
                </a>
                <p>Platform for Laravel and Flutter Templates.</p>
                <div class="social-links mt-3">
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
    
              <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="{{route('template')}}">Template</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="{{route('news')}}">News</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="{{route('about')}}">About</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">MAR Media</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="https://flutter.dev">Flutter</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="https://laravel.dev">Laravel</a></li>
                </ul>
              </div>
    
              <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Web Template</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile App Template</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Desktop App Template</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">App and Web Development</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-12 footer-contact text-centertext-md-start" style="color: black">
                <h4>Contact Us</h4>
                <p>
                  Malang State University <br>
                  Semarang Street 5th, Malang<br>
                  Indonesia <br><br>
                  <strong>Phone:</strong> +62 896 5892 2021<br>
                  <strong>Email:</strong> ask@uklise.com<br>
                  <strong>Instagram:</strong><a href="https://www.instagram.com/uklise/" target="blank">@uklise</a><br>
                </p>
    
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>UKlise</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by Aurum Team x MAR Media
          </div>
        </div>
      </footer><!-- End Footer -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
</body>
</html>