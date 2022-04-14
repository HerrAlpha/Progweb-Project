@extends('dashboard.main')
@section('title','UKlise - Dashboard')
@section('content')
@foreach ($users as $user)
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard - Welcome Back ,{{auth()->user()->name}}</h1>
      <form action="/dashboard/{{$user->id}}/edit" method="get">
            <button type="submit" class="btn btn-primary">Update Profile | Password</button>
      </form>
    </div>
    <div class="row">
        <div class="col-lg-4">
        <img src="/storage/{{$user->avatar}}">
        </div>
        <div class="col-lg-8">
            <div class=" mb-2 text-uppercase bg-black text-white text-center">Nama</div>
            <div class=" mb-2 ">{{$user->name}}</div>
            <div class=" mb-2 text-uppercase bg-black text-white text-center">Username</div>
            <div class=" mb-2 ">{{$user->username}}</div>
            <div class=" mb-2 text-uppercase bg-black text-white text-center">Email</div>
            <div class=" mb-2 ">{{$user->email}}</div>
            <div class=" mb-2 text-uppercase bg-black text-white text-center">Phone</div>
            <div class=" mb-2 ">{{$user->phone}} </div>
            <div class=" mb-2 text-uppercase bg-black text-white text-center">Address</div>
            <div class=" mb-2 ">{{$user->address}}</div>
            <div class=" mb-2 text-uppercase bg-black text-white text-center">About</div>
            <div class=" mb-2 ">{{$user->about}}</div>
        </div>
    </div>
  </main>
  @endforeach
  @stop
