@extends('layout.masterNonNavbar')
@section('title', 'Login')
<style>
    body{
        text-decoration: none;
    }
</style>
@section('content')


<div class="row g-3">
    <div class="col-md-12" style="text-align: center">
        <a href="/"><img src="/assets/picture/Logo-nonText.png" style="width: 100px; height: 100px;" alt=""></a>
        <br>
        <h3>Welcome Back Developers</h3>
        <h5>Please Login First Before Control Your Templates!</h5>
    </div><br>
    <div class="col-md-12" >
        <div class="row g-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">Login</h5>
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                        @endif
                        @if (session()->has('err'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('err')}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                         @endif
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username" style="text-align: left">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="password" style="text-align: left">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
                            </div><br>
                            <div class="row">
                                <div class="col-md-12" style="text-align:right;">
                                    <a href="/forgotpass" >Forgot password?</a>
                                </div>
                                <div class="col-md-12">
                                    <p>Doesn't have an account? You can <a href="/signup">Sign Up</a> first!</p>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary" style="text-align: center">Sign In</button>
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
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@stop
