@extends('layout.master')
@section('title','Web Templates')
@section('css','web.css')
@section('js','web.js')

@section('content')
    <div class="card bg-dark card-ku text-white">
        <img src="assets/picture/jumbotron.jpg" class="card-img img-fluid" alt="...">
        <div class="card-img-overlay text-center mt-5">
        <h5 class="card-title font-ku-3">UKlise Website Template</h5>
        <p class="card-text text-capitalize font-ku-4 mt-4">you come to the right place <br> which our provide all category <br> website template</p>
        <p class="card-text font-ku-2-5">Last updated 3 mins ago</p>
        </div>
  </div>
<div class="container">
<div class="row mt-5">
    <div class="col-sm-2">
        <div class="dropdown">
            <button class="a-black w-100 btn btn-secondary dropdown-toggle bg-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li class="dropdown-item">Technology</li>
              <li class="dropdown-item">Art & Design</li>
              <li class="dropdown-item">Food & Restaurant</li>
              <li class="dropdown-item">Education</li>
              <li class="dropdown-item">Industrial</li>
              <li class="dropdown-item">Fashion & Beauty</li>
              <li class="dropdown-item">Sport</li>
            </ul>
          </div>
    </div>
    <div class="col-sm-2">
        <div class="dropdown">
            <button class="a-black w-100 btn btn-secondary dropdown-toggle bg-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Free
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li class="dropdown-item">Free</li>
              <li class="dropdown-item">Pay</li>
            </ul>
          </div>
    </div>
    <div class="col-sm-8">
         <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success bg-primary text-white" type="submit">Search</button>
         </form>
    </div>
</div>
<div class="container text-center mt-5">

    <h1 class="m-5">Website Template Category</h1>
    <div class="row owl-carousel owl-theme">
        <div class="col-sm-2 ">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Art & Design
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Food & Restaurant
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Education
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Industrial
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Fashion & Beauty
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Business & Law
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Sport
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Travel & Hotels
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15','a'=>''])
            Portfolio
            @endcomponent
        </div>
        <div class="row mt-5">
            <div class="col">
            <div class="owl-navigation">
                <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
        </div>
        </div>
    </div>

</div>
<div class="container mt-5">
    <h1 class="text-center">Most Popular Website Template</h1>
    <div class="row mt-5 border-ku text-center">
        <div class="col-sm-4">
             @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'26.5','a'=>''])
            Technology
            @endcomponent
            <a href="#" class="btn btn-primary d-block">Go somewhere</a>
        </div>
        <div class="col-sm-4">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'26.5','a'=>''])
            Technology
            @endcomponent
            <a href="#" class="btn btn-primary  d-block">Go somewhere</a>
        </div>
        <div class="col-sm-4">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'26.5','a'=>''])
            Technology
            @endcomponent
            <a href="#" class="btn btn-primary  d-block">Go somewhere</a>
        </div>
        </div>
    </div>
</div>
</div>
@stop
