@extends('layout.master')
@section('title','Apps Templates')

<style>
    body{
        background-image: url('/assets/picture/bgapp.jpeg');
        background-repeat: no-repeat;
        background-color: black;
        background-size: cover;
        width: 100%;
        height: 100%;
        background-position: center;
        background-attachment: fixed
        text-decoration: none;
    }

</style>

@section('content')
<br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10" style="text-align: center">
         <h1  style="color:rgb(242,242,247);">APP TEMPLATES</h1>
         <H3  style="color:rgb(242,242,247);">Available for Android, iOS, Windows, and macOS</H3>
         <h3  style="color:rgb(242,242,247);">Using Flutter Framework</h3>
    </div>
    <div class="col-md-1"></div>
</div>
    <br>
    <br>
    <br>
<div class="card">
    <div class="card-body">
        <div class="container">
        <!--==========================Content Category Titles========================-->
            <div class="title" style="text-align: center"><h2>Category</h2></div>
        <!--==========================Content List Carousel ========================-->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row g-3">
                    {{-- @foreach($namesApp as $i)
        <div class="col-sm-2 mb-4">
            <div class="card">
                <a href="{{$i->$linksApp}}">
                    <div class="card-body bg-light">
                        <p class="card-text text-black">{{$i->$namesApp}}</p>
                    </div>
                      <img src="{{$i->$imgsApp}}" class="card-img-bottom" height="100">
                </a>
            </div>
        </div>
        @endforeach --}}

                </div>
               </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <br>
          <!--==========================Content Category Titles========================-->
          <div class="title" style="text-align: center"><h2>Freemium Templates</h2></div>
          <!--==========================Content List Carousel ========================-->
          <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row g-3">
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row g-3">
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row g-3">
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="card">
                              <div class="card-body" style="height: 200px">

                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <br>
            <!--==========================Content Category Titles========================-->
            <div class="title" style="text-align: center"><h2>Other Free Templates</h2></div>
        <!--==========================Content List Carousel ========================-->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row g-3">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body" style="height: 200px">

                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
</div>


@stop
