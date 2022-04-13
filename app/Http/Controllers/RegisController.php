<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisController extends Controller
{
    public function signup(Request $request){
        $data = $request -> validate([
            'name' => 'required',
            'username' => 'required|min:7|unique:users',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'required_with:password|same:password|min:6',
            'phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required|integer',
            'country'=>'required',
            'company'=>'',
            'avatar'=>'image|file|size:3072',
            'web'=>'',
            'app'=>'',
            'about'=>'',
        ]);

        //avatar store image
        if($request->file('avatar')){
            $data['avatar'] = $request->file('avatar')->store('avatars');
        }

        //enkripsi password
        $data['password'] = bcrypt($data['password']);

        //insert data dengan model
        User::create($data);

        //flash message
        // $request->session()->flash('success','Berhasil Registrasi, Silahkan Login');

        return view('login')->with('success','Berhasil Registrasi, Silahkan Login');
    }
}
