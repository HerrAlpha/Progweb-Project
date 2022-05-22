<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;

class desktopAppController extends Controller
{
    public function show(Category $desktopApp){
        $post = $desktopApp->id;
        $post = Post::all()->where('category_id', $post)->where('compatibility', 'Desktop App');
        
        return view('web.desktopApp-category',compact('desktopApp','post'));
    }

    public function detail(Post $detail){
        return view('web.desktopApp-show',compact('detail'));
    }
}
