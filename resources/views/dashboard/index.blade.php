@extends('dashboard.main')
@section('title','UKlise - Dashboard')
@section('content')
@section('subHeader')
@stop
@foreach ($users as $user)
    <div class="row">
        <div class="col-md-3 d-flex align-items-center justify-content-center">
            <img src="{{$user->avatar}}" alt="" style="border-radius:100%; width: 150px; height: 150px; padding:0.1%; align-self:center" class="start-50">
        </div>
        <div class="col-md-9" >
            <h4>{{$user->name}}</h4>
            <h6>@ {{$user->username}}</h6>
            <h6>{{$user->email}}</h6>
            <h6>{{$user->about}}</h6>
            <h6>More Detail</h6>
        </div>
    </div>
    @endforeach
    <br><br>
    <h3>Latest Upload</h3>
    <br>
    <div class="row g-3">
         @foreach ($posts as $post){{-- MAKE SURE IT POST ARE DESCENDING BASED CREATED AT --}}
        <div class="col-md-3">
            <div class="card">
                <img src="{{$post->thumbnail}}" alt="">
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    <p>{{$post->description}}</p>
                    <p>{{$post->category}}</p>
                    <p>{{$post->created_at}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
 @stop

