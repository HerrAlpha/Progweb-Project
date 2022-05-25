<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - @yield('title')</title>
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script defer src="/js/dashboard.js"></script>
    <script src="/js/bootstrap.js"></script>

    <style>
        body{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: semibold;
        color: #f2f2f4;
        }
    </style>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/assets/picture/Logo-nonText.png" alt="" width="40px" height="40px" style="text-align: center;" class="d-inline-block">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('userAdmin')}}">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('postAdmin')}}">Post</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          @yield('content')
      </div>
</body>
</html>