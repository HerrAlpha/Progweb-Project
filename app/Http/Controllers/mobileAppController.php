<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;

class mobileAppController extends Controller
{
    public function show(Category $mobileApp){
        $post = $mobileApp->id;
        $post = Post::all()->where('category_id', $post)->where('compatibility','Mobile App');
        return view('web.mobileApp-category',compact('mobileApp','post'));
    }
    
    public function detail(Post $detail){
        return view('web.mobileApp-show',compact('detail'));
    }
}

