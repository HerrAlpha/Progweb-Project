@extends('layout.master')
@section('title','About')
@section('css','')
@section('js','')
@section('class-navbar','bg-primary')
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
<div class="container-fluid pt-5 pb-5">
            <div class="container">
              <h2 class="display-3 text-center" id="tentang" style="color:#f2f2f7">About</h2>
              <p class="text-center" style="color:#f2f2f7">
                UKLISE  APPLICATION FOR LARAVEL AND FLUTTER TEMPLATE 
              </p>
              <div class="clearfix pt-5">
                <img
                  src="/assets/picture/Logo-nonText.png"
                  class="col-md-5 float-md-end mb-4 crop-img"
                  width="300"
                  height="300"
                />
                <p>
                <div class="col-md-6 text" style="color:#f2f2f7">
                Website adalah salah satu media yang paling sering diakses dan digunakan oleh masyarakat 
                dalam mencari berbagai informasi dan juga sebagai sarana komunikasi. Penggunaan website ini 
                sangat dibutuhkan di berbagai bidang, akan tetapi dalam pembuatan website memerlukan waktu yang 
                cukup lama, maka dari itu dibuatlah website yang menyediakan template app dan web sebagai solusi 
                dari permasalahan tersebut. Dengan adanya template app dan web ini diharapkan dapat mempermudah 
                para developer dalam membuat app dan web, serta tidak perlu lagi membuat segala sesuatunya 
                dari awal, hanya perlu mengganti beberapa elemen sesuai keinginan. 
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
                  <p>Mahasiswa Teknik Informatika</p>

                </div>
                <div class="col-md-4 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>M.Baharuddin Yusuf</h6>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
                <div class="col-md-4 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Mohammad Agung Rizki</h6>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                   
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Roudhotulloh Nazakhan</h6>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="{{ ('about.jpg') }}" class="rounded-circle mb-3">
                  <h6>Shohwatul Hana</h6>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
              </div>
            </div>
          </div>

@stop
