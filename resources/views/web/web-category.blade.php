@extends('layout.master')
@section('title', '{{$web->title}}')
@section('class-navbar', 'bg-primary')
@section('content')
<h1 class="text-center my-5">{{$web->title}}</h1>
<hr class="border-bottom border-5 border-dark">
{{-- @dump($post) --}}
@foreach ($post as $post)

    {{$post->title}}
@endforeach
@stop