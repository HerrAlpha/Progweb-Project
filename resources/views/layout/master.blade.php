<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - @yield('title')</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <script defer src="/js/@yield('js')"></script>
    <script defer src="/js/owl.carousel.min.css"></script>
    <script defer src="/js/Jquery3.6.0.main.js"></script>
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/@yield('css')">
    <style>
        .navbar{
        width= 100%;
        
        /* rgb(10, 132, 255) */
    }
    body{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: semibold;
    }
    #1{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: bold;
    }
    .nav-link, .navbar-brand{
        color: rgb(209, 209, 214);
    }
    .active{
        /* color: rgb(229, 229, 234); */
        color: rgb(209, 209, 214);
    }
    .navbar-nav{
        alignment: center;
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
    a{
      color:#f2f2f7;
    }
   

    </style>

</head>
<body>
    <nav class=" navbar navbar-expand-lg navbar-dark @yield('class-navbar')" style="padding:0.5%;">
        <div class="container-fluid">
          <a class="navbar-brand fs-3" id="1" href="/" style="color:#f2f2f7">UKlise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse flex-row-reverse "  style="text-align: right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('templates') ? 'active' : '' }}" href="{{route('template')}}">Templates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('web') ? 'active' : '' }}" href="{{route('web')}}">Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('app') ? 'active' : '' }}" href="{{route('app')}}">Apps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div  style="padding: 7%;">
      @yield('content')
    </div>
    <br>
    <br>
    <br>
    <div class="card">
      <div class="card-body">
        @yield('content2')
      </div>
    </div>
      
    
    <footer>
      <div class="card bg-primary" style="padding: 3%; height:auto;">
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
    </footer>

      </div>
  </div>
</body>

</html>
