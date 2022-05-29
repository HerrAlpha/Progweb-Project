<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="description" content="">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="/css/dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstrap.css">
<script defer src="/js/dashboard.js"></script>
<script src="/js/bootstrap.js"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      body{
      font-family: "SF Pro Text","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
      font-weight: semibold;
    }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
    <img src="/assets/picture/Logo.png" alt="" width="40%" height="40%" style="text-align: center;" class="d-inline-block">
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search Here..." aria-label="Search" style="width: 100px; padding-left:2%">

</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/dashboard')?'active':''}}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/dashboard/template')?'active':''}}" href="/dashboard/template">
              <span data-feather="file"></span>
              Your Template
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/dashboard/settings')?'active':''}}" href="/dashboard/settings">
              <span data-feather="settings"></span>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " type="button" data-bs-toggle="modal" data-bs-target="#logout" style="color: rgb(255, 69, 58)">
              <span data-feather="power"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2 id="Greeting"></h2><br>
          <script>
            var myDate = new Date();
            var hrs = myDate.getHours();

            var greet;

            if (hrs < 12 && hrs >=4)
                greet = '<span data-feather="sunrise" style="width: 40px; height: 40px"></span> Good Morning';
            else if (hrs >= 12 && hrs <= 17)
                greet = '<span data-feather="sun" style="width: 40px; height: 40px"></span> Good Afternoon';
          else if (hrs >= 17 && hrs <= 24 || hrs >= 0 && hrs < 4)
                greet = '<span data-feather="moon" style="width: 40px; height: 40px"></span> Good Evening';

            document.getElementById('Greeting').innerHTML =
                greet + ' {{auth()->user()->name}} <br> ';
          </script>
          <h1 class="h2">@yield('subTitle') </h1>
          @yield('subHeader')
        </div>
        @yield('content')
        <br>
        <br>
        <footer><p style="text-align: center;"> Copyright &copy; 2022-<script>document.write(new Date().getFullYear())</script> Uklise All Rights Reserved | Collaboration of Aurum Team and MAR Media Under MAR Media Company</p></footer>

    </main>
  </div>
</div>
<form action="/logout" method="post">
        @csrf
  <!-- Modal -->
<div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Logout Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abort</button>
        <button type="submit" class="btn btn-danger">Confirm</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
  function prevImg(){

    const  cover = document.querySelector('#cover');
    const prevCover = document.querySelector('.prev-img-cover');


    prevCover.style.display =  'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(cover.files[0]);

    oFReader.onload = function(oFREvent){
      prevCover.src = oFREvent.target.result;
    }

  }
//opsi lain
//   const blob = URL.createObjectURL(image.files[0]);
// imgPreview.src = blob;
</script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>
  </body>
</html>
