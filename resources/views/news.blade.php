@extends('layout.master')
@section('title','Tech News')
@section('css','web')
@section('js','')
@section('bg-body','bg-dark')
@section('class-navbar','bg-primary')
@section('content')

<div class="container mt-5">

    @for ($i = 0; $i<10;$i++)
    <div class="row mb-5">
        <div class="card mb-3">
            <img src="{{$news[$i]->urlToImage}}" class="card-img-top" height="500">
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2>{{$news[$i]->title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p class="card-text">{{$news[$i]->description}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                       Author : {{$news[$i]->author}}
                    </div>
                    <div class="col-lg-3">
                        By : {{$news[$i]->source->name}}
                    </div>
                    <div class="col-lg-3">
                        <a class="link-primary" href="{{$news[$i]->url}}">More Information</a>
                    </div>
                    <div class="col-lg-3">
                        <p class="card-text"><small class="text-muted">{{$news[$i]->publishedAt}}</small></p>
                    </div>
                </div>
            </div>
          </div>
    </div>
    @endfor

</div>

@stop
