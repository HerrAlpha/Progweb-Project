@extends('layout.master')
@section('title','Mobile App Template')
@section('content')
@section('bg-body','bg-dark')
<div class="container bg-dark" style="padding-top:10%;padding-bottom:10%">
    <div class="row g-3">
        {{-- LANDING PAGE --}}
        <div class="col-md-12" style="text-align: center; padding-top:5%;padding-bottom:5%;color:#f2f2f7">
            <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
              </svg>
            <h1>Mobile App Template</h1>
        </div>
        {{-- CATEGORY --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Category</h3>
            <br>
            <div class="row g-3">
                @for ($i=1;$i<count($names);$i++)
                <div class="col-sm-2 mb-4">
                    <div class="card">
                        <a href="{{$links[$i]}}">
                            <div class="card-body bg-light">
                                <p class="card-text text-black">{{$names[$i]}}</p>
                            </div>
                              <img src="{{$imgs[$i]}}" class="card-img-bottom" height="100">
                        </a>
                    </div>
                </div>
                @endfor
            </div>
            
        </div>
        {{-- TOP 4 FREE CONTENT --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Top 4 Free Content</h3>
        </div>
        {{-- TOP 4 PAID CONTENT --}}
        <div class="col-md-12" style="padding-top: 5%; padding-bottom:5%;">
            <h3 style="text-align: center; color:#f2f2f7">Top 4 Paid Content</h3>
        </div>
    </div>
</div>
@stop