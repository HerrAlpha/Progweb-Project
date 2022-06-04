<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - @yield('title')</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <script defer src="/js/bootstrap.min.js"></script>
    <script defer src="/js/@yield('js')"></script>
    <script defer src="/js/Jquery3.6.0.main.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.9/jquery.jcarousel.min.js" integrity="sha512-5TU8T3STShZiLsdqDqiKnj0Z72ccPZpIDCuItxc2S7G3lyiwqiuLuDFVNsLQ7Hgu5f33DlZ2KAJspbn6NAXqnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/@yield('css')">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/assets/picture/Logo-nonText.png">
    <link rel="apple-touch-icon" href="/assets/picture/Logo-nonText.png">
    <!-- Vendor JS Files -->
  {{-- <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> --}}
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

    .start{
        width: 200px;
        height: 70px;
    }
    .w{
      color: #f2f2f7;
    }
    .u{
      text-decoration: none;
    }
    .u:hover{
      color: rgb(209, 209, 214);
    }

    nav{
      background-blur: blur(16px);
    }



    </style>

</head>
<body class="@yield('bg-body')" style="width: 100%">
    <nav class=" navbar navbar-expand-lg navbar-dark d-flex align-items-center justify-content-between @yield('class-navbar')" style="width:95%">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
          <img src="/assets/picture/Logo-nonText.png" alt="" width="50px" height="50px" class="d-inline-block align-text-top">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  justify-content-end" id="navbarNav" style="text-align: center">
            <ul class="navbar-nav">
              <li class="nav-item" ><div class="nav-tengah collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('templates') ? 'active' : '' }}" href="{{route('template')}}">Templates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{route('news')}}">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
                </li></ul>
              </div>
              </li>
              <li class="nav-item" ><div class="nav-akhir collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
              @auth
              {{-- <div class="dropstart"> --}}
                <li class="nav-item justify-content-end" >
                    <div class="dropdown">
                      @foreach ($users as $user)
                        <h6 style="color: #f2f2f7" style="align-self: center"> 
                          <img src="storage/{{$user->avatar}}" alt="" style="width: 35px; height: 35px; border-radius: 100%"> 
                          {{$user->username}}
                          <span data-feather="arrow-down"></span>
                        </h6>
                      @endforeach
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li><a href="#" class="dropdown-item">Favourite</a></li>
                            <li><a href="#" class="dropdown-item">Saved</a></li>
                            <li><a href="#" class="dropdown-item">Library</a></li>
                                 <hr>
                             <li>
                                 <form action="/logout" method="post">
                                    @csrf
                                     {{-- <button class="dropdown-item" type="submit">Logout</button> --}}
                                     <input type="submit" value="Logout" class="dropdown-item">
                                </form>
                             </li>
                        </ul>
                    </div>
                </li>
              @else
              <li class="nav-item justify-content-end">
                <a class="btn btn-outline-info btn-md border-0 px-2 mx-3" href="{{route('login')}}" style="color:#f2f2f7" role="button">Login</a>
            </li>
              @endauth
              </ul>
              </div></li>
              
            </ul>
          </div>
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
              <strong>Instagram:</strong><a href="https://www.instagram.com/uklise/" target="_blank">@uklise</a><br>
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

{{-- <footer>
  <div class="card bg-primary" style="width:100%;height:auto;">
    <div class="col-md" style="padding: 3%;">
      <div class="row g-3">
        <div class="col-md-4">
          <h3 class="w">UKlise</h3>
          <p class="w">App and Web Templates<br>
          Create by Aurum Team and Support from MAR Media<br>
          Malang City, East Java, Indonesia
          </p>

      </div>

        <div class="col-md-4">
          <div class="col-md-3">

          </div>
          <div class="col-md-6">
            <p class="w">
              Pages <br>
              <a href="/" class="w u">Home</a><br>
               <a href="{{route('template')}}" class="w u">Templates</a><br>
               <a href="{{route('web')}}" class="w u">Web Templates</a><br>
               <a href="{{route('app')}}" class="w u">Apps Templates</a><br>
               <a href="{{route('about')}}" class="w u">About</a></p>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-3">

          </div>
          <div class="col-md-6">
            <p class="w">
              Others <br>
              <a href="#" class="w u">MAR Media</a><br>
               <a href="#" class="w u">Carrier</a><br>
               <a href="#" class="w u">Stakeholders</a><br>
               <a href="https://laravel.com/" class="w u">Laravel</a><br>
               <a href="https://flutter.dev/" class="w u">Flutter</a></p>

          <div class="col-md-3">

          </div>

      </div>


    </div>
</div>
  </div>
</div>
</footer> --}}
