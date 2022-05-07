<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WebController extends Controller
{
    public function index(){
        // $data = Post::where('category_id',$post->category->id);
        return view('web.web-category');
    }
}
