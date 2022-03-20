<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - @yield('title')</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        .navbar{
        width= 100%;
        background-color: rgb(10, 132, 255);
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
        color: rgb(229, 229, 234);
    }
    .navbar-nav{
        alignment: center;
    }
    .start{
        width: 200px;
        height: 70px;
    }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" id="1" href="/">UKlise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="text-align: right;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('template')}}">Templates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('web')}}">Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('app')}}">Apps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
