@extends('admin.admin-main')
@section('title', 'User')
@section('content')

    <h1  style="padding: 3%">User Management</h1>
    <br>
    <table border="1" style="text-align: center">
        <tr>
            <th>No</th>
    <th>ID User</th>
    <th>Name</th>
    <th>Username</th>
    <th>Address</th>
    <th>Zip Code</th>
    <th>City</th>
    <th>State / Province</th>
    <th>Country</th>
    <th>Prefered For</th>
    <th>Avatar</th>
    <th>Description</th>
    <th>Registered At</th>
    <th>Action</th>
        </tr>
        @foreach($users as $pt)
        <tr>
            
            <td>-></td>
            <td>{{$pt->id_user}}</td>
            <td>{{$pt->name}}</td>
            <td>{{$pt->username}}</td>
            <td>{{$pt->address}}</td>
            <td>{{$pt->zip}}</td>
            <td>{{$pt->city}}</td>
            <td>{{$pt->state}}</td>
            <td>{{$pt->country}}</td>
            <td>
                @if ($pt->web == 1 && $pt->app == 1)
                    Laravel and Flutter
                    
                @else 
                @if ($pt->app == 1)
                    Flutter
                    
                @else
                    Laravel
                @endif
                    
                @endif
            </td>
            <td><img src="/storage/app/{{$pt->avatar}}" alt="" style="width: 48px; height: 27px"></td>
            <td>{{$pt->about}}</td>
            <td>{{$pt->created_at}}</td>
            
            <td>
                <a href="#">Delete</a>
            </td>
            
        </tr>
        @endforeach
    </table>

@stop