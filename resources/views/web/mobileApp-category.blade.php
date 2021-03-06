@extends('layout.master-layout')
@section('title', 'Mobile App - Category')
@section('content')
<h1 class="text-center my-5">{{$mobileApp->title}}</h1>
<hr class="border-bottom border-5 border-dark"></hr>
{{-- @dump($post) --}}
<br>
{{-- <h3 style="text-align: center">Latest Upload From {{$web->title}}</h3> --}}

<br>
<div class="row g-3">
    @foreach ($post as $post)
        <div class="col-md-3 ">
            <div class="card bg-light" style="height: auto">
                <img src="/storage/{{$post->cover}}" class="card-img-top" style="width: auto; height:150px">
                <div class="card-body">
                    <p>
                         <span class="badge bg-secondary">{{$post->framework}}</span>
                         <span class="badge bg-secondary">
                             @if ($post->price == '0')
                                 Freeware
                             @else
                                 Payware
                             @endif
                         </span>
                    </p>
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text border-bottom bg-white">By @ {{$post->user->username}} </p>
                    {{-- <p class="card-text">Published At {{$post->created_at}}</p> --}}
                    <a href="/templates/mobile-app/detail/{{$post->id}}" class="btn btn-primary mt-3 w-100">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
    <br>
</div>

@stop
