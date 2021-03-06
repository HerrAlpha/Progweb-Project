@extends('dashboard.main')
@section('title','UKlise - Settings')
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
@section('subTitle','Settings')
@section('content')
{{-- @section('subHeader') --}}
<div class="container">
    {{-- <div class="container">
        <div class="row g-3">
            @foreach ($users as $user)
            <div class="col-sm-3">
                <div class="card" style="border-radius:100%; width: 100px; height: 100px;">
                    <div class="card-body">
                        <img src="{{$user->avatar}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <h4>{{$user->name}}</h4>
                <h5>@ {{$user->username}}</h5>
                <h5>{{$user->about}}</h5>
            </div>
            @endforeach
        </div>
    </div> --}}
    <br>
    <div class="row g-3">

            <div class="col-md-4" style="padding:1%"><a href="/dashboard/settings/update-profile/{{auth()->user()->id}}/edit">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card" style="width:70px;height:70px; border-radius: 25%">
                            <div class="card-body">
                                <span data-feather="user" style="padding: 1%; width:35px;height:35px"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" style="align-self:center"><h5>Update Profile</h5></div>
                </div>
           </a> </div>


            <div class="col-md-4" style="padding:1%"><a href="/dashboard/settings/privacy-and-security">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card" style="width:70px;height:70px; border-radius: 25%">
                            <div class="card-body">
                                <span data-feather="key" style="padding: 1%; width:35px;height:35px"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" style="align-self:center"><h5>Change Password</h5></div>
                </div>
            </a></div>


            

            <div class="col-md-4" style="padding:1%">
                <a href="/dashboard/settings/information-center">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="card" style="width:70px;height:70px; border-radius: 25%">
                            <div class="card-body">
                                <span data-feather="info" style="padding: 1%; width:35px;height:35px"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9" style="align-self:center"><h5>Information Center</h5></div>
                </div>
                </a>
            </div>

    </div>
</div>
<br><br><br><br><br><br>
@stop

