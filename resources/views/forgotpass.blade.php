@extends('layout.masterNonNavbar')
@section('title', 'Login')
<style>
    body{
        text-decoration: none;
    }
</style>
@section('content')

<div class="row g-3" >
    <div class="col-md-12" style="text-align: center">
        <a href="/"><img src="/assets/picture/Logo-nonText.png" style="width: 100px; height: 100px;" alt=""></a><br>
        <h3>Lost Your Password?</h3>
        <h5>You can fill your email and get a message from us to helping you to change your password!</h5>
    </div>
    <div class="col-md-12">
        <div class="row g-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Forgot Password</h5>
                        @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('message')}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                        @elseif (session()->has('email'))
                         <div class="alert alert-success alert-dismissible fade show" role="alert">
                             {{session('email')}}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        @endif
                        <form action="/forgotpass" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary">Send me e-mail confirmation</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@stop
