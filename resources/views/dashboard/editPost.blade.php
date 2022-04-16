@extends('dashboard.main')
@section('title','Edit Post')
@section('subTitle','Edit Post')
@section('subHeader')
<form action="/dashboard/template/{{$template->id}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <button type="submit" class="btn btn-info">Update Template</button>
@stop
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{old('title',$template->title)}}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-select" name="category_id">
                <option selected></option>
                @foreach ($categories as $category)
                    @if (old('category_id',$template->category->id) == $category->id)
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
            <textarea type="text" rows='6' cols="70" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter description">{{old('description',$template->description)}}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Upload File Template</label>
            @if ($template->file)
            <img  src='/storage/{{$template->file}}' class='prev-img-cover img-fluid col-lg-2 d-block'><img>
            @else
            <img class='prev-img-cover img-fluid col-lg-2'><img>
            @endif
            <input type="file" class="form-control @error('file') is-invalid @enderror" id="cover" name="file" value='{{old('file')}}'>
            @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="cover">Front Cover</label>
            @if ($template->cover)
            <img  src='/storage/{{$template->cover}}' class='prev-img-cover img-fluid col-lg-2 d-block'><img>
            @else
            <img class='prev-img-cover img-fluid col-lg-2'><img>
            @endif
            <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" value='{{old('cover')}}' onchange="prevImg()">
            @error('cover')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price ( $ )</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price',$template->price)}}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    </div>
</div>
</form>
@stop
