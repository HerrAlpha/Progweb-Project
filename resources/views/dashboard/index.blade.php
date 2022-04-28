@extends('dashboard.main')
@section('title','UKlise - Dashboard')
@section('content')
@section('subHeader')

@foreach ($users as $user)
<form action="/dashboard/{{$user->id}}/edit" method="get">
      <button type="submit" class="btn btn-primary">Update Profile | Password</button>
</form>
@endforeach
@stop
@foreach ($users as $user)
    <div class="row">
        <div class="col-lg-4 ">
        <img class='img-fluid border border-secondary border-5 rounded' src="/storage/{{$user->avatar}}">
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
  @endforeach
  @stop
