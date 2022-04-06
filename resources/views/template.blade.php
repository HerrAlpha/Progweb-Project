@extends('layout.master')
@section('title','Templates')
@section('css','')
@section('js','')
<style>
    body{
        background-image: url("/assets/picture/tempbg.jpg");
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

    }

</style>
@section('content')
<div  style="padding: 3%;">
    <div class="row g-3">
        <br><br>
        <div class="col-md-12">
            <h1 style="color: #f2f2f7;text-align: center;">Templates</h1>
            <br>
            <h4 style="color: #f2f2f7;text-align: center;">"Template (tem.plate) is a preset format for a document or file, used so that the format does not have to be recreated each time it is used."</h4>
            <br><br>
        </div>
   </div>
</div>


   <div class="card">
       <div class="card-body">
        <div class="container">
            <div style="padding-top: 6%; padding-left: 3% padding-right: 3%">
            <div class="row g-3" style="align-self: center"  >
                <h2 style="text-align: center">Available Templates</h2>
                <div class="col-sm-6" style="align-self: center">
                    <div class="card" style="height:500px">
                        <img class="card-img-top" src="/assets/picture/web.png" alt="Card image cap" style="width:60%;height:60%;align-self:center">
                        <div class="card-body">
                            <h5 class="card-title">Web</h5>
                            <p class="card-text">We Make More Web Templates From Laravel and Flutter</p>
                            <a href="/web" class="btn btn-primary">Go to Web</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" style="align-self: center">
                    <div class="card" style="height:500px">
                        <img class="card-img-top" src="/assets/picture/app.png" alt="Card image cap" style="width:60%;height:60%;align-self:center">
                        <div class="card-body">
                            <h5 class="card-title">App</h5>
                            <p class="card-text">We Also Make for App and Make From Flutter. It Available for Windows, macOS, iOS, iPadOS, and Android </p>
                            <a href="/app" class="btn btn-primary">Go to App</a>
                        </div>
                    </div>
                </div>

            </div>
       </div>
   </div>


@stop
