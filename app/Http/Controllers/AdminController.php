<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function authAdmin(){
        return view('admin.admin-authentication');
    }

    public function postAdmin(){
        $posts = Post::all();
        return view ('admin.admin-post', compact('posts'));
    }

    public function userAdmin(){
        $users = User::all();
        return view ('admin.admin-user', compact('users'));
    }
}
