@extends('layout.master')
@section('title','NAMA FILE')
@section('class-navbar','bg-primary')
@section('content')

<div class="container"><br><br>
    <div class="row g-3">
        <div class="col-md-12"><h2>NAMA TEMPLATE</h2></div><br>
        <div class="col-md-12">
            <div class="row g-3">
                <div class="col-md-6">
                    <img src="#" alt="GAMBAR" style="width: 160px; height:90px">
                </div>
                <div class="col-md-6">
                    <p>KETERANGAN</p>
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
            <table>
                <tr>
                    <th>
                        <img src="#" alt="">
                        <p>Web Browser</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>Android</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>Chrome OS</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>iOS</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>macOS</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>Windows</p>
                    </th>
                    <th>
                        <img src="#" alt="">
                        <p>Linux</p>
                    </th>
                </tr>
                <tr>
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
                    </td>
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