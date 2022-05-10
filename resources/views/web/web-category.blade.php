@extends('layout.master')
@section('content')
<div class="container">
    <h1 class="text-center">{{$web->title}}</h1>
    @foreach ($post as $post)
    <title>{{$post->title}}</title>
    @endforeach

@stop
