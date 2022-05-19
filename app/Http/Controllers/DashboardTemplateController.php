<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id',auth()->user()->id)->get();
        $categories = Category::all();
        // $sing = $posts->description->Str::limit($posts->description, 20, '...');
        // $posts['description'] = Str::limit($posts->description,20,'...');
        return view('dashboard.template',compact('posts','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $posts = Post::where('user_id',auth()->user()->id)->get();
        return view('dashboard.templateEdit',compact('posts','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|min:5',
            'category_id'=> 'required',
            'user_id'=> 'required',
            'web_browser' => '',
            'ios'=> '',
            'android'=>'',
            'chrome_os'=>'',
            'mac_os'=>'',
            'linux'=>'',
            'windows'=>'',
            'framework'=>'required',
            'description'=> 'required|min:10',
            'github_url'=> 'min:5',
            'file'=>'file',
            'cover'=>'file|image|max:2048',
            'price'=>'required'
        ]);

        //kurang store data path ke public dan database //sudah
        $data['file'] = $request->file('file')->store('file');
        $data['cover'] = $request->file('cover')->store('cover');

        Post::create($data);

        return redirect('/dashboard/template')->with('success','Post berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $template)
    {
        $categories = Category::all();
        return view('dashboard.editPost',compact('template','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $template)
    {
        $data = $request->validate([
            'title'=>'required|min:5',
            'category_id'=> 'required',
            'user_id'=> 'required',
            'description'=> 'required|min:10',
            'github_url'=> 'min:5',
            'file'=>'file',
            'cover'=>'file|image|max:2048',
            'price'=>'required'
        ]);

        if($request->file('file'))
        {
            if($template->file){
                Storage::delete($template->file);
            }
            $data['file'] = $request->file('file')->store('file');
        }

        if($request->file('cover'))
        {
            if($template->cover){
                Storage::delete($template->cover);
            }
            $data['cover'] = $request->file('cover')->store('cover');
        }

        Post::where('id',$template->id)->update($data);

        return redirect('/dashboard/template')->with('success','Post has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $template)
    {
        if($template->cover){
            Storage::delete($template->cover);
        }
        if($template->file){
            Storage::delete($template->file);
        }
        Post::destroy($template->id);
        return redirect('/dashboard/template')->with('success','Post has been deleted');
    }
}
