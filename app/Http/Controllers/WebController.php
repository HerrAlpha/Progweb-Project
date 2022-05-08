<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;

class WebController extends Controller
{
    public function show(Category $web){
        $post = $web->id;
        $post = Post::all()->where('category_id',$post);
        return view('web.web-category',compact('web','post'));
    }
}
