<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;

class hybridController extends Controller
{
    public function show(Category $hybrid){
        $post = $hybrid->id;
        $post = Post::all()->where('category_id', $post)->where('compatibility', 'Hybrid');
        return view('web.hybrid-category',compact('hybrid','post'));
    }

    public function detail(Post $detail){
        return view('web.hybrid-show',compact('detail'));
    }
}
