@extends('layout.master')
@section('title','Tech News')
@section('bg-body','bg-dark')
{{-- @section('class-navbar','bg-primary') --}}
@section('content')

<div class="container" style="padding:3%">
<h3 style="text-align: center; color: #f2f2f7">Programming Technology</h3>
<div class="row g-3">
    @foreach ($news as $news)
    <div class="col-md-3" style="padding:1%">
        <div class="card" style="width: 100px; height:300px">
                <img src="{{$news[]->urlToImage}}" alt="" class="card-img-top">
                <div class="card-header">
                    {{$news->title}}
                </div>
                <div class="card-body">
                    <p class="card-text">Author : {{$news->author}}</p>
                    <p class="card-text">Source : {{$news->source->name}}</p>
                    <a class="link-primary" href="{{$news->url}}">Read More</a>
                    <p class="card-text"><small class="text-muted">Post at : {{$news->publishedAt}}</small></p>
        </div>
    </div>
    @endforeach


</div>
</div>
@stop
