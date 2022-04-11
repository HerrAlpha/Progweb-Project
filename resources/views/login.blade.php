@extends('layout.masterNonNavbar')
@section('title', 'Login')
<style>
    body{
        text-decoration: none;
    }
</style>
@section('content')
<div class="row g-3">
    <div class="col-md-6">
        <h3 style="color: rgb(242,242,247);">Welcome Back Developers</h3>
        <h5 style="color: rgb(242,242,247);">Please Login First Before Control Your Templates!</h5>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form action="{{url('/proccessForm')}}" method="GET">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div><br>
                    <p>Doesn't have an account? You can <a href="/signup">Sign Up</a> first!</p>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </form><br>
                <p style="text-align: center">======== OR ========</p><br>
                <div class="row g-3">
                    <div class="col-md-4" style="text-align: center">
                        <a href="#">
                            <img src="/icons/apple.svg" alt="Apple ID Login" style="text-align: center; padding: 2%; width:55px; height:55px">
                            <p>Apple</p>
                        </a>
                    </div>
                    <div class="col-md-4" style="text-align: center">
                        <a href="#">
                            <img src="/icons/google.svg" alt="Google ID Login" style="text-align: center; padding: 2%; width:55px; height:55px">
                            <p>Google</p>
                        </a>
                    </div>
                    <div class="col-md-4" style="text-align: center">
                        <a href="#">
                            <img src="/icons/github.svg" alt="Github ID Login" style="text-align: center; padding: 2%; width:55px; height:55px">
                            <p>Github</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop