@extends('dashboard.main')
@section('title','UKlise - Your Template')
@section('subTitle','Your Template')
@section('subHeader')
<form action="/dashboard/template/{{auth()->user()->id}}/edit" method="get">
    <button type="submit" class="btn btn-warning">Create Post</button>
</form>
@stop
@section('content')

@foreach ($posts as $post)
<div class="d-block py-3 mb-2 border-2 border-dark rounded border position-relative">
    <div class="row">
        <div class="col-lg-3 justify-content-center align-items-center d-flex">
            <canvas class="" width="200" height="150" style="border:1px solid #000000;"></canvas>
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
        <div class="col-lg-1 text-center">
            <div class="btn btn-warning mb-1rounded">Update</div>
            <div class="btn btn-danger mb-1rounded">Delete</div>
            <div class="btn btn-warning mb-1 rounded">Update</div>
        </div>
    </div>
</div>
@endforeach


@stop
