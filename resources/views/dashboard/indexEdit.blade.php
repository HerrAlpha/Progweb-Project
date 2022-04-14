@extends('dashboard.main')
@section('title','Update Profile')
@section('subTitle','Update Profile')
@section('content')
@foreach ($users as $user)
    <form action="/dashboard" method="get">
        <button type="submit" class="btn btn-primary">Update</button>
  </form>
@endforeach
@stop
