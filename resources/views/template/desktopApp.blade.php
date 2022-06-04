@extends('layout.master-layout')
@section('title','Desktop App Template')
@section('content')
    <div class="row g-3">
        {{-- LANDING PAGE --}}
        <div class="col-md-12" style="text-align: center; padding-top:5%;padding-bottom:5%;color:#f2f2f7">
            <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
              </svg>
            <h1>Desktop App Template</h1>
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

@stop