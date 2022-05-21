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
</div>
@stop