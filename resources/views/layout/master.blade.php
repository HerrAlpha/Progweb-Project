<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - @yield('title')</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <script defer src="/js/bootstrap.js"></script>
    <script defer src="/js/@yield('js')"></script>
    <script defer src="/js/Jquery3.6.0.main.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.9/jquery.jcarousel.min.js" integrity="sha512-5TU8T3STShZiLsdqDqiKnj0Z72ccPZpIDCuItxc2S7G3lyiwqiuLuDFVNsLQ7Hgu5f33DlZ2KAJspbn6NAXqnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/@yield('css')">
    <link rel="shortcut icon" href="/assets/picture/Logo-nonText.png">
    <link rel="apple-touch-icon" href="/assets/picture/Logo-nonText.png">
    <style>

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
    nav{
      background-blur: blur(16px);
    }



    </style>

</head>
<body class="@yield('bg-body')">
    <nav class=" navbar navbar-expand-lg navbar-dark @yield('class-navbar')" style="padding:0.5%;">
        <div class="container-fluid">
          <a class="navbar-brand" id="1" href="/" style="color:#f2f2f7">
          <img src="/assets/picture/Logo.png" alt="" width="20%" height="20%" style="text-align: center;" class="d-inline-block">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  flex-row-reverse" id="navbarNav" style="text-align: right">
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
                <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{route('news')}}">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
              </li>
              @auth
              <div class="dropstart">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M7 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                      </svg>  Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </div>
              @else
              <li class="nav-item">
                <a class="btn btn-primary btn-md border-0 px-2 mx-3" href="{{route('login')}}" role="button">Login</a>
              @endauth
              </li>
              <li class="nav-item"></li>

            </ul>
          </div>
        </div>
    </nav>
  <div class="container">

      @yield('content')

  </div>
    <br>
    <br>
    <br>



    <footer>
      <div class="card bg-primary" style="width:auto;height:auto;">
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
