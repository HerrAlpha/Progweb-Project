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
        $post = Post::all()->where('category_id', $post)->where('web_browser', 1);
        return view('web.web-category',compact('web','post'));
    }

    public function detail(Post $detail){
        return view('web.web-show',compact('detail'));
    }
}
