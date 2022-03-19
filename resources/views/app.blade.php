<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - App Templates</title>
    <script defer src="/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        #navbar{
        width= 100%;
        background-color: rgb(0, 122, 255);
    }
    body{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: semibold;
    }
    #1{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: bold;
    }
    .navbar-nav{
        alignment: center;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" id="1" href="/">UKlise</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/templates">Templates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/web">Web</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/app">Apps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>
</html>