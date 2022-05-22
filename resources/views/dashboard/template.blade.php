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


<div class="container">
    <div class="row g-3">
    @foreach ($posts as $post)
        <div class="col-lg-12">
            <div class="card" style="height: 220px width:auto; padding: 1%">
                <div class="row g-3">
                    <div class="col-md-3 col-lg-4">
                            <img  src="/storage/{{$post->cover}}" alt="COVER FROM TEMPLATE" width="300" height='200' >
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <h4>{{$post->title}}</h4>
                        <h5>
                            @if ($post->price == 0 || $post->price == "0")
                            Free
                            @else
                            ${{$post->price}}
                            @endif
                        </h5>
                        <p>Description : {{$post->description}}</p>
                        <p>Category : {{$post->category->title}}</p>
                        <p class="silent"> Post at {{$post->created_at}}</p>
                    </div>
                    <div class="col-md-2 col-lg-2" style="align-items: center">
                        <a href='/dashboard/template/{{$post->id}}/edit'  class="btn btn-info mt-1 mb-1 rounded">
                            <span data-feather="arrow-up"></span>
                            Update</a>
                        <form action="/dashboard/template/{{$post->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger mt-1 mb-1 rounded"onclick="return confirm('Yakin Banget??')">
                                <span data-feather="trash"></span>
                                Delete</button>
                        </form>
                        <a href='/dashboard/template/{{$post->id}}' class="btn btn-success mt-1 mb-1 rounded">
                            <span data-feather="eye"></span>
                            Show</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


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
                        <label for="title">Title*</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter title" value="{{old('title')}}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category*</label>
                        <select class="form-select" name="category_id">
                            <option selected>Choose your template category</option>
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
                        <label for="form">Compatibility*</label>
                        <select name="compatibility" id="form" class="form-select">
                            <option selected>Choose the Compatibility</option>
                            <option value="Web Browser">Web Browser</option>
                            <option value="Mobile App">Mobile App</option>
                            <option value="Desktop App">Desktop App</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                        @error('compatibility')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="framework">Framework*</label>
                        <select class="form-select" name="framework">
                            <option selected>Choose the Framework</option>
                            <option value="flutter">Flutter</option>
                            <option value="laravel">Laravel</option>
                        </select>
                        @error('framework')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea type="text" rows='6' cols="70" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Enter description">{{old('description')}}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Upload File Template*</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cover">Front Cover*</label>
                        <img class='prev-img-cover img-fluid col-lg-2'><img>
                        <input type="file" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" onchange='prevImg()'>
                        @error('cover')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div><br>
                    <div class="form-group">
                        <label for="urlGithub">Or you can deploy your exist GitHub or GitLab Repository Url here</label>
                        <input type="text" class="form-control @error('urlGithub') is-invalid @enderror" id="urlGithub" name="github_url" placeholder="Enter GitHub or GitLab url" value="{{old('urlGithub')}}">
                        @error('urlGithub')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div><br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Read this before you deploy!
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>Before you upload your template, you must agree with this rules</strong><br>
                              <p>1. Your project must be Laravel or Flutter, not else!</p>
                              <p>2. If you set to pay mode, you no need to deploy your GitHub Url for forking into GitHub Desktop</p>
                              <p>3. Your template when you set it into pay mode, must be final version. Except while your template still on revision, you can set it into free mode.</p>
                              <p>4. When you choose to upload through GitHub, you could copy it. You can upload your documentation on file upload to avoid red validation.</p>
                              <p>5. Your project shouldn't contain some racism, sexuallity, et cetera. Especially for especially insults to minorities.</p>
                              <p>6. Please obey all Moralism Rule.</p>
                              <p>7. When you upload it, it means you agree with our rules</p>
                              <br><br>
                              Peace Greeting
                              <br><br>
                              UKlise
                            </div>
                          </div>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label for="price">Price ( $ )*</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="0">
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Discard</button>
          <button type="submit" class="btn btn-success">Post</button>
        </div>
      </div>
    </div>
</div></form>

@stop

{{-- <div class="d-block py-3 mb-2 border-5 border-dark rounded border position-relative bg-template-ku">
    <div class="row">
        <div class="col-lg-3">
           <img class='img-fluid' src="/storage/{{$post->cover}}">
        </div>
        <div class="col-lg-3">
            <table>
                <tr class="btn-primary d-inline-flex p-1 rounded">
                    <td></td>
                    <td></td>
                    <td>US$ {{$post->price}}</td>
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
        </div> --}}
