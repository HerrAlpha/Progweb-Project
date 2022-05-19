@extends('layout.master')
@section('title','Detail')
@section('class-navbar','bg-primary')
<style>
    a{
        text-decoration: none;
        color: rgb(10, 132, 255);
    }
</style>
@section('content')
<div class="container"><br><br>
    <div class="row g-3">
        <div class="col-md-12"><h2>{{$template->title}}</h2></div><br>
        <div class="col-md-12">
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="/storage/{{$template->cover}}" alt="GAMBAR" style="width: 320px; height:180px">
                </div>
                <div class="col-md-6">
                    <p>Category :  {{$template->category->title}}</p>
                    <p class="text-capitalize">Framework : {{$template->framework}}</p>
                    <p>Publishers : <a href="#" style="text-decoration: none; color: rgb(10, 132, 255);">{{$template->user->username}}</a></p>
                    <p>Created At : {{$template->created_at}} </p>
                    <a href="/download/{{$template->id    }}" class="btn btn-success">
                        <span data-feather="download"></span>
                        Download Here
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <p>Or, you can use GitHub URL to fork it</p>
            {{-- setelah migrate ganti ini --}}
            {{-- <a href="{{$template->github_url}}" class="btn btn-success mb-3"> --}}
            <a href="{{$template->github_url}}" class="btn btn-success mb-3">
                <span data-feather="github"></span>
                Fork Here
            </a>
            {{-- setelah migrate ganti ini --}}
            {{-- <a href="{{$template->github_url}}" class="btn btn-success mb-3"> --}}
            <p>Or you can copy this GitHub Url</p>
            <input class="form-control" type="text" value="{{$template->github_url}}" aria-label="readonly input example" readonly style="font-family: Consolas, monaco, monospace; width:auto;height:auto;">
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Description</h5>
                </div>
                <div class="card-body">
                    {{$template->description}}
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <h4 style="text-align: center">SUPPORTING PLATFORM</h4>
            <br>
            <table class="table table-striped table-hover">
                <tr>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">Web Browser</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">Android</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">Chrome OS</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">iOS</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">macOS</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">Windows</p>
                    </th>
                    <th>
                        <span data-feather=""></span>
                        <p style="text-align:center">Linux</p>
                    </th>
                </tr>
                <tr class="text-center">
                    <td>
                        @if ($template->web_browser == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->android == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->chrome_os == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->ios == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->mac_os == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->windows == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                    <td>
                        @if ($template->linux == 1)
                            Support
                        @else
                            Not Supported
                        @endif
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        {{-- <div class="col-md-12">
            <h4>More Upload from NAME</h4>
        </div>
        <br>
        <div class="col-md-12">
            <div class="row g-3">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="#" alt="THUMBNAIL">
                        <div class="card-header">
                            <h6>HEADER</h6>
                        </div>
                        <div class="card-body">
                            <p>BODY</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="#" alt="THUMBNAIL">
                        <div class="card-header">
                            <h6>HEADER</h6>
                        </div>
                        <div class="card-body">
                            <p>BODY</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="#" alt="THUMBNAIL">
                        <div class="card-header">
                            <h6>HEADER</h6>
                        </div>
                        <div class="card-body">
                            <p>BODY</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="#" alt="THUMBNAIL">
                        <div class="card-header">
                            <h6>HEADER</h6>
                        </div>
                        <div class="card-body">
                            <p>BODY</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@stop
