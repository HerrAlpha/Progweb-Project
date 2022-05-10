@extends('dashboard.main')
@section('title','Update Profile')
@section('subTitle','Update Profile')
@section('content')
@foreach ($update as $user)
<form action="/dashboard/settings/update-profile" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name*</label>
        {{-- <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{old('name')}}"> --}}
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{$user->name}}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="username">Username*</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username"  value='{{$user->username}}' disabled readonly>
        @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value='{{$user->email}}' disabled readonly>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone">Phone*</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone" value='{{$user->phone}}'>
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address*</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter address" value='{{$user->address}}'>
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="city">City*</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Enter city" value='{{$user->city}}'>
        @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="state">State*</label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="Enter state" value='{{$user->state}}'>
        @error('state')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="zip">Zip*</label>
        <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" placeholder="Enter zip" value='{{$user->zip}}'>
        @error('zip')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="country">Country*</label>
        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Enter country" value='{{$user->country}}'>
        @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="company">Company or Organization* </label>
        <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Enter company" value='{{$user->company}}'>
        @error('company')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="formFile" class="form-label">Upload Your Avatar*</label>
        <input class="form-control @error('formFile') is-invalid @enderror" type="file" id="formFile" name="avatar" value="{{$user->avatar}}">
    </div>
    {{-- <img class='prev-img-cover img-fluid col-lg-2'><img> --}}
    {{-- <input type="file" class="form-control" id="avatar" name="avatar" onchange='prevImg()' value="{{$user->avatar}}"> --}}
    <div class="form-group">
        <label for="about">About*</label>
        <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" placeholder="Enter about" value=''>{{$user->about}}</textarea>
        @error('about')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-4">
      Update
    </button>
</form>
@endforeach

@stop
