@extends('dashboard.main')
@section('title','Update Profile')
@section('subTitle','Update Profile')
@section('content')

@foreach ($user as $users)
<form action="/signup" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$users->id}}">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{$users->name}}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username"  value='{{$users->username}}'>
        @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value='{{$users->email}}'>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password" value='{{bcrypt($users->password)}}' disabled>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Enter password" value='{{old('password_confirmation')}}'>
        @error('password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div> --}}
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone" value='{{$users->phone}}'>
        @error('phone')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter address" value='{{$users->address}}'>
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Enter city" value='{{$users->city}}'>
        @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="Enter state" value='{{$users->state}}'>
        @error('state')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="zip">Zip</label>
        <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" placeholder="Enter zip" value='{{$users->zip}}'>
        @error('zip')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Enter country" value='{{$users->country}}'>
        @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Enter company" value='{{$users->company}}'>
        @error('company')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- <div class="form-group">
        <label for="developer">What are you prefered on?</label><br>
        <input class="form-check-input" type="checkbox" value="Laravel" name="web" id="Laravel" @if($users->laravel =='laravel') {{'checked'}} @endif>
        <label class="form-check-label" for="Laravel">
           Laravel Framework
        </label>
        <input class="form-check-input" type="checkbox" value="Flutter" name="app" id="Flutter" @if($users->flutter =='flutter') {{'checked'}} @endif>
        <label class="form-check-label" for="Flutter">
          Flutter Framework
        </label>
    </div> --}}
    <div class="form-group">
        <label for="formFile" class="form-label">Upload Your Avatar</label>
        <input class="form-control @error('formFile') is-invalid @enderror" type="file" id="formFile" name="avatar">
    </div>
    <input type="hidden" name="avatar" value="{{$users->avatar}}">
    <div class="form-group">
        <label for="about">About</label>
        <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" placeholder="Enter about" value=''>{{$users->about}}</textarea>
        @error('about')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@stop
