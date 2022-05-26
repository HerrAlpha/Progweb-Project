@extends('layout.master')
@section('title','About')
@section('content')

<style>
  .container{
    color: #f2f2f7;
  }
</style>
<!-- tentang -->
@section('bg-body', 'bg-dark')
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
                  Along with the times, technology is getting more advanced and faster.
                   Moreover, the need for more and more apps and websites is fast.
                  However, some of the developers can't do app and website development quickly,
                   especially with diverse client requests.
                   This is what inspired us to develop a site and application called UKlise.
                   UKlise is a useful platform for developing developers to create ready-to-use app and site templates,
                   and also helps other developers to complete their projects quickly and reduce the risk of errors by simply 
                   changing the necessary elements. We currently provide templates for the Laravel and Flutter frameworks 
                   which can support almost all existing platforms. Such as Android, Chrome OS, iOS, macOS, Linux, Windows 
                   and Web Browser.
                </p>
              </div>
            </div>
          </div>
          <!-- tim -->
          <div class="pt-5 pb-5 bg-dark">
            <div class="container text-center">
              <h3 class="display-3" id="staff">Our Team</h3>

              <div class="row pt-2 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                  <img src="/assets/picture/gaby.jpg" class="rounded-circle mb-3" style="width: 300px; height: 300px">
                  <h6>Maria Gabyelent Gea</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>

                </div>
                <div class="col-md-4 text-center tim">
                  <img src="/assets/picture/bayu.jpg" class="rounded-circle mb-3" style="width: 300px; height: 300px">
                  <h6>M.Baharuddin Yusuf</h6>
                  <p>Founder of UKlise - Back End and DB Division</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
                <div class="col-md-4 text-center tim">
                  <img src="/assets/picture/agung.jpg" class="rounded-circle mb-3" style="width: 300px; height: 300px">
                  <h6>Mohammad Agung Rizki</h6>
                  <p>Founder of UKlise - Founder of MAR Media - Front End and DB Division</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                   
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="/assets/picture/naza.jpg" class="rounded-circle mb-3" style="width: 300px; height: 300px">
                  <h6>Roudhotulloh Nazakhan</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                
                </div>
                <div class="col-md-6 text-center tim">
                  <img src="/assets/picture/hana.jpg" class="rounded-circle mb-3" style="width: 300px; height: 300px">
                  <h6>Shohwatul Hana</h6>
                  <p>Co Founder of UKlise - Assistance</p>
                  <p>Mahasiswa Teknik Informatika</p>
                  <p>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop
