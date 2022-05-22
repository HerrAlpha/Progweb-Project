@extends('layout.master')
@section('title','{{$detail->title}}')
@section('class-navbar','bg-primary')
<style>
    a{
        text-decoration: none;
        color: rgb(10, 132, 255);
    }
</style>
@section('content')
<div class="container"><br><br>
    <div class="row g-3">
        <div class="col-md-12"><h2>{{$detail->title}}</h2></div><br>
        <div class="col-md-12">
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="/storage/{{$detail->cover}}" alt="GAMBAR" style="width: 320px; height:180px">
                </div>
                <div class="col-md-6">
                    <p>Category :  {{$detail->category->title}}</p>
                    <p class="text-capitalize">Framework : {{$detail->framework}}</p>
                    <p>Publishers : <a href="#" style="text-decoration: none; color: rgb(10, 132, 255);">{{$detail->user->username}}</a></p>
                    <p>Created At : {{$detail->created_at}} </p>
                    <p>Last Update At : {{$detail->updated_at}} </p>
                    <p>Compatibility : {{$detail->compatibility}}</p>
                    @if ($detail->price == 0)
                    <a href="/download/{{$detail->id    }}" class="btn btn-success">
                        <span data-feather="download"></span>
                        Download Here
                    </a>
                    @else
                    <a href="#" class="btn btn-success">
                        <span data-feather="dollar-sign"></span>
                        Buy ${{$detail->price}}
                    </a>
                    @endif
                    
                </div>
            </div>
        </div>
        @if ($detail->price == 0)
        <div class="col-md-12">
            <p>Or, you can use GitHub URL to fork it</p>
            {{-- setelah migrate ganti ini --}}
            {{-- <a href="{{$detail->github_url}}" class="btn btn-success mb-3"> --}}
            <a href="{{$detail->github_url}}" class="btn btn-success mb-3">
                <span data-feather="github"></span>
                Fork Here
            </a>
            {{-- setelah migrate ganti ini --}}
            {{-- <a href="{{$detail->github_url}}" class="btn btn-success mb-3"> --}}
            <p>Or you can copy this GitHub Url</p>
            <input class="form-control" type="text" value="{{$detail->github_url}}" aria-label="readonly input example" readonly style="font-family: Consolas, monaco, monospace; width:auto;height:auto;">
        </div>
        @endif
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Description</h5>
                </div>
                <div class="card-body">
                    {{$detail->description}}
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        
    </div>
</div>
@stop
