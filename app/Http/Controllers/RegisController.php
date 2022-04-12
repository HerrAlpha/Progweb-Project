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
            // 'avatar'=>'file|size:3072',
            'web'=>'',
            'app'=>'',
            'about'=>'',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        $request->session()->flash('success','Berhasil Registrasi, Silahkan Login');

        return view('login');
    }
}
