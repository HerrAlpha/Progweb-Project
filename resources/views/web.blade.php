@extends('layout.master')
@section('title','Web Templates')
@section('css','web.css')

@section('content')
    <div class="card bg-dark card-ku text-white">
        <img src="assets/picture/jumbotron.jpg" class="card-img img-fluid" alt="...">
        <div class="card-img-overlay text-center mt-5">
        <h5 class="card-title">UKlise Website Template</h5>
        <p class="card-text text-capitalize font-ku-2-5 mt-4">you come to the right place <br> which our provide all category <br> website template</p>
        <p class="card-text">Last updated 3 mins ago</p>
        </div>
  </div>
<div class="row mt-5">
    <div class="col-sm-2">
@component('layout.dropdown',['one'=>'Technology','two'=>'Technology','three'=>'Technology'])
        Category
@endcomponent
    </div>
    <div class="col-sm-2">
@component('layout.dropdown',['one'=>'Free','two'=>'Pay','three'=>''])
        Free
@endcomponent
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
    <div class="row">
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-2">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'15'])
            Technology
            @endcomponent
        </div>
    </div>

</div>
<div class="row mt-5">
    <h1 class="text-center">Most Popular Website Template</h1>
    <div class="row mt-5 border-ku">
        <div class="col-sm-4">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'22'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-4">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'22'])
            Technology
            @endcomponent
        </div>
        <div class="col-sm-4">
            @component('layout.cardWeb',['img'=>'jumbotron.jpg','width'=>'22'])
            Technology
            @endcomponent
        </div>
        </div>
    </div>
</div>
@stop
