@extends('admin.admin-main')
@section('title', 'Post')
@section('content')
<div class="container">
    <h1  style="padding: 3%">Post Management</h1>
    <br>
    <table border="1" style="text-align: center">
        <tr>
            <th>No</th>
    <th>ID Post</th>
    <th>Title</th>
    <th>Category</th>
    <th>Compatibility</th>
    <th>Framework</th>
    <th>File</th>
    <th>Cover</th>
    <th>Author</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Action</th>
        </tr>
        @foreach($posts as $pt)
        <tr>
            
            <td>-></td>
            <td>{{$pt->id_post}}</td>
            <td>{{$pt->title}}</td>
            <td>{{$pt->Category->title}}</td>
            <td>{{$pt->compatibility}}</td>
            <td>{{$pt->framework}}</td>
            <td><a href="/download/{{$pt->id    }}">File here</a></td>
            <td><img src="/storage/app/{{$pt->cover}}" alt="" style="width: 48px; height: 27px"></td>
            <td>{{$pt->User->username}}</td>
            <td>{{$pt->created_at}}</td>
            <td>{{$pt->updated_at}}</td>
            <td>
                <a href="#">Delete</a>
            </td>
            
        </tr>
        @endforeach
    </table>
</div>
@stop