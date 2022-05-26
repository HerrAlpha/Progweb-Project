@extends('layout.master')
@section('title','Tech News')
@section('bg-body','bg-dark')
{{-- @section('class-navbar','bg-primary') --}}
@section('content')

<div class="container" style="padding:1%">
<h3 style="text-align: center; color: #f2f2f7">Programming Technology</h3>
    <div class="row g-3">
    @foreach ($newsC as $newsC)
    <div class="col-md-4">
        <div class="card" style="width: 320px; height:400px">
                <img src="{{$newsC->urlToImage}}" alt="" class="card-img-top" style="width:auto;height:180px" style="text-align: center">
                <div class="card-header">
                    <h6>{{$newsC->title}}</h6>
                </div>
                <div class="card-body">
                  <a href="{{$newsC->url}}" class="btn btn-outline-primary">Read More</a>
                </div>
        </div>
    </div>

        {{-- MODAL STATIC SCROLLABLE NEWSC --}}
    <div class="modal fade" id="newsC" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">{{$newsC->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{$newsC->urlToImage}}" alt="" class="card-img-top" style="width:320px;height:180px" style="text-align: center">
                      <p class="card-text">Author : {{$newsC->author}}</p>
                      <p class="card-text">Source : {{$newsC->source->name}}</p>
                      <p class="card-text"><small class="text-muted">Post at : {{$newsC->publishedAt}}</small></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="{{$newsC->url}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div><br><br>
    <h3 style="text-align: center; color: #f2f2f7">Computer Technology</h3>
    <div class="row g-3">
    @foreach ($newsA as $newsA)
    <div class="col-md-4">
        <div class="card" style="width: 320px; height:400px">
                <img src="{{$newsA->urlToImage}}" alt="" class="card-img-top" style="width:auto;height:180px" style="text-align: center">
                <div class="card-header">
                    <h6>{{$newsA->title}}</h6>
                </div>
                <div class="card-body">
                  <a href="{{$newsA->url}}" class="btn btn-outline-primary">Read More</a>
                </div>
        </div>
    </div>

        {{-- MODAL STATIC SCROLLABLE newsA --}}
    <div class="modal fade" id="newsA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">{{$newsA->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{$newsA->urlToImage}}" alt="" class="card-img-top" style="width:320px;height:180px" style="text-align: center">
                      <p class="card-text">Author : {{$newsA->author}}</p>
                      <p class="card-text">Source : {{$newsA->source->name}}</p>
                      <p class="card-text"><small class="text-muted">Post at : {{$newsA->publishedAt}}</small></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="{{$newsA->url}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
    <br><br>
    <h3 style="text-align: center; color: #f2f2f7">Automotive Technology</h3>
    <div class="row g-3">
    @foreach ($newsB as $newsB)
    <div class="col-md-4">
        <div class="card" style="width: 320px; height:400px">
                <img src="{{$newsB->urlToImage}}" alt="" class="card-img-top" style="width:auto;height:180px" style="text-align: center">
                <div class="card-header">
                    <h6>{{$newsB->title}}</h6>
                </div>
                <div class="card-body">
                  <a href="{{$newsB->url}}" class="btn btn-outline-primary">Read More</a>
                </div>
        </div>
    </div>

        {{-- MODAL STATIC SCROLLABLE newsB --}}
    <div class="modal fade" id="newsB" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">{{$newsB->title}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{$newsB->urlToImage}}" alt="" class="card-img-top" style="width:320px;height:180px" style="text-align: center">
                      <p class="card-text">Author : {{$newsB->author}}</p>
                      <p class="card-text">Source : {{$newsB->source->name}}</p>
                      <p class="card-text"><small class="text-muted">Post at : {{$newsB->publishedAt}}</small></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="{{$newsB->url}}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>

</div>
@stop
