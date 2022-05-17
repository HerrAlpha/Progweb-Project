@extends('layout.master')
@section('title', 'Category')
@section('class-navbar', 'bg-primary')
@section('content')
<h1 class="text-center my-5">{{$web->title}}</h1>
<hr class="border-bottom border-5 border-dark"></hr>
{{-- @dump($post) --}}
<br>
<h3 style="text-align: center">Latest Upload From {{$web->title}}</h3>

<br>
<div class="row g-3">
    @foreach ($post as $post)
        <div class="col-md-3">
            <div class="card" style="height: 300px">
                <img src="{{asset('storage/'.$post->image)}}" class="card-img-top" style="width: auto; height:50px" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->description}}</p>
                    {{-- <p class="card-text">By @ {{$user->username}} </p> --}}
                    <p class="card-text">Published At {{$post->created_at}}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
    <br>
</div>

@stop
