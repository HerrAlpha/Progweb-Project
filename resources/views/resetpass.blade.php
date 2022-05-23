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
        <a href="/"><img src="/assets/picture/Logo-nonText.png" style="width: 100px; height: 100px;" alt=""></a><br>
        <h3>Reset Password</h3>
        <h5>After you receive your email, you can change your password.!</h5>
    </div> <br>
    <div class="col-md-12">
        <div class="row g-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reset Password</h5>
                        @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('status')}}
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
        
                        @endif
                        <form action="/reset-password" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{$token}}">
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{old('email')}}" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirmation Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Enter password confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@stop
