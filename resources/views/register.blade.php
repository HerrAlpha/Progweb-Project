@extends('layout.masterNonNavbar')
@section('title', 'Register')
@section('content')
<div class="row g-3">
    <div class="col-md-6">
        <h1 style="color:rgb(242, 242, 247)">Welcome Developers</h1>
        <h3 style="color:rgb(242, 242, 247)">Please Sign Up for Your Templating Experience</h3><br>
        <img src="illustrator.png" alt="" style="width:20%;heigth:20%">

    </div>
    <div class="col-md-6">
        <div class="card" style="width: 300; height: auto">
            <div class="card-body">
                <h5 class="card-title">Register</h5>
                <form action="{{url('/processingForm')}}" method="GET">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Enter password">
                        @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Enter address">
                        @error('address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Enter city">
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control @error('state') is-invalid @enderror" id="state" name="state" placeholder="Enter state">
                        @error('state')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip" placeholder="Enter zip">
                        @error('zip')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Enter country">
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Enter company">
                        @error('company')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="developer">What are you prefered on?</label><br>
                        <input class="form-check-input" type="checkbox" value="" name="web" id="Laravel">
                        <label class="form-check-label" for="Laravel">
                           Laravel Framework
                        </label>
                        <input class="form-check-input" type="checkbox" value="" name="app" id="Flutter">
                        <label class="form-check-label" for="Flutter">
                          Flutter Framework
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Upload Your Avatar</label>
                        <input class="form-control @error('formFile') is-invalid @enderror" type="file" id="formFile">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" placeholder="Enter about"></textarea>
                        @error('about')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Are you already have account? You can <a href="/login">login</a> here.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop