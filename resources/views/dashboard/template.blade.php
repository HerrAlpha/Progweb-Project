@extends('dashboard.main')
@section('title','UKlise - Your Template')
@section('subTitle','Your Template')
@section('subHeader')
     <a data-bs-toggle="modal" data-bs-target='#add' class="btn btn-warning">
         <span data-feather="plus"></span>
         Create Template
        </a>
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
                    <td><a href='/dashboard/template/{{$post->id}}' class="btn btn-success mt-1 mb-1 rounded">Show</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endforeach
<!--MODAL STATIC POST TEMPLATE-->

<form action="/dashboard/template" method="post" enctype="multipart/form-data">
        @csrf
<div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-dialog-scrollable">
        
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Post Template</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                        <label for="form">Compatibility</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Web Browser" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Web Browser
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="iOS" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              iOS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Android" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Android
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Chrome OS" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Chrome OS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="macOS" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              macOS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Linux" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                             Linux
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Windows" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Windows
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="framework">Category</label>
                        <select class="form-select" name="framework">
                            <option selected>Choose the Framework</option>
                            <option value="Flutter">Flutter</option>
                            <option value="Laravel">Laravel</option>
                        </select>
                        @error('framework')
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
          <button type="submit" class="btn btn-primary">Post</button>
        </div>
      </div>
    </div>
</div></form>

@stop
