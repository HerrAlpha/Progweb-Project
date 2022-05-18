@extends('layout.master')
@section('title','NAMA FILE')
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
        <div class="col-md-12"><h2>NAMA TEMPLATE</h2></div><br>
        <div class="col-md-12">
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="#" alt="GAMBAR" style="width: 400px; height:225px">
                </div>
                <div class="col-md-6">
                    <p>Category : </p>
                    <p>Framework : </p>
                    <p>Publishers : <a href="#">anonym</a></p>
                    <p>Created At : </p>
                    <a href="#" class="btn btn-success">
                        <span data-feather="download"></span>
                        Download Here
                    </a>
                </div>
            </div>
        </div><br>
        <div class="col-md-12">
            <p>Or, you can use GitHub URL to fork it</p>
            <a href="#" class="btn btn-success">
                <span data-feather="github"></span>
                Fork Here
            </a>
            <br>
            <p>Or you can copy this GitHub Url</p>
            <input class="form-control" type="text" value="URL Value" aria-label="readonly input example" readonly style="font-family: Consolas, monaco, monospace; width:auto;height:auto;">
        </div>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Description</h5>
                </div>
                <div class="card-body">
                    DESCRIPTION
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
                <tr>
                    {{-- <td>
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
                        @if ($template->macos == 1)
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
                    </td> --}}
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="col-md-12">
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
        </div>
    </div>
</div>

@stop