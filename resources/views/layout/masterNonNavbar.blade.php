<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKlise - @yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.grid.css">
    <link rel="stylesheet" href="/js/bootstrap.min.js">
    <link rel="shortcut icon" href="/assets/picture/Logo.png">
    <link rel="apple-touch-icon" href="/assets/picture/Logo.png">
    <script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        font-weight: semibold;
        background-image: url(/assets/picture/reg-bg.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }</style>
</head>
<body>
<div class="container" style="padding:2%">
    @csrf
    @yield('content')
    <br>
    <br>
    <br>
    <p style="text-align: center; color:rgb(242, 242, 247)"> Copyright &copy; 2022-<script>document.write(new Date().getFullYear())</script> Uklise All Rights Reserved | Collaboration of Aurum Team and MAR Media Under MAR Media Company</p>

</div>
</body>
</html>
