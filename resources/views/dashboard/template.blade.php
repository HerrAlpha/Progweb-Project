@extends('dashboard.main')
@section('title','UKlise - Your Template')
@section('subTitle','Your Template')
@section('subHeader')
<form action="/dashboard/template/create" method="get">
    <button type="submit" class="btn btn-warning">Create Post</button>
</form>
@stop
@section('content')
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@foreach ($posts as $post)
<div class="d-block py-3 mb-2 border-5 border-dark rounded border position-relative bg-template-ku">
    <div class="row">
        <div class="col-lg-3">
           <img class='img-fluid' src="/storage/{{$post->cover}}">
        </div>
        <div class="col-lg-3">
            <table>
                <tr class="btn-primary d-inline-flex p-1 rounded">
                    <td>Price</td>
                    <td></td>
                    <td>{{$post->price}}$</td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>:</td>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>:</td>
                    <td>{{$post->category->title}}</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-5">
            <table>
                <tr>
                    <td>Description</td>
                    <td>:</td>
                    <td>{{$post->description}}</td>
                </tr>
            </table>
        </div>
        <div class="col-lg-1 text-center bg-black rounded">
            <table>
                <tr>
                    <td><a href='/dashboard/template/{{$post->id}}/edit'  class="btn btn-info mt-1 mb-1 rounded">Update</a></td>
                </tr>
                <tr>
                    <td>
                        <form action="/dashboard/template/{{$post->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger mt-1 mb-1 rounded"onclick="return confirm('Yakin Banget??')">Delete</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><a href='' class="btn btn-success mt-1 mb-1 rounded">Show</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endforeach


@stop
