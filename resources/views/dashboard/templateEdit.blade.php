@extends('dashboard.main')
@section('title','Create Post')
@section('subTitle','Create Post')
@section('subHeader')
<form action="/dashboard/template" method="post" enctype="multipart/form-data">
    @csrf
    
@stop
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-select" name="category_id">
                <option selected></option>
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endif
                    @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" rows='6' cols="70" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter description">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Upload File Template</label>
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cover">Front Cover</label>
            <img class='prev-img-cover img-fluid col-lg-2'><img>
            <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" onchange='prevImg()'>
            @error('cover')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price ( $ )</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    </div>
    <button type="submit" class="btn btn-info">Post Template</button>
</div>
</form>
@stop
