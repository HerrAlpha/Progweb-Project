@extends('layout.master')
@section('title','About')
@section('content')

<style>
    body{
        background-image: url("/assets/picture/tempbg.jpg");
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

    }

</style>
<!-- tentang -->
<div class="container-fluid ">
  <div class="container">
              <h2 class="display-3 text-center" id="tentang" style="color:#f2f2f7">About</h2>
              <p class="text-center" style="color:#f2f2f7">
                UKLISE  APPLICATION FOR LARAVEL AND FLUTTER TEMPLATE 
              </p>
              <div class="clearfix pt-5">
                <img
                  src="/assets/picture/Logo-nonText.png"
                  class="col-md-5 float-md-end mb-4 crop-img"
                  width="300px"
                  height="300px"
                />
                <p>
                <div class="col-md-6 text" style="color:#f2f2f7">
                
                </p>
              </div>
            </div>
          </div>
          <!-- tim -->
          <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container text-center">
              <h3 class="display-3" id="staff">Our Team</h3>

              <div class="row pt-2 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Maria Gabyelent Gea</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>

                </div>
                <div class="col-md-4 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>M.Baharuddin Yusuf</h6>
                  <p>Founder of UKlise - Back End and DB Division</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
                <div class="col-md-4 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Mohammad Agung Rizki</h6>
                  <p>Founder of UKlise - Founder of MAR Media - Front End and DB Division</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                   
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Roudhotulloh Nazakhan</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Shohwatul Hana</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
              </div>
            </div>
          </div>

@stop
