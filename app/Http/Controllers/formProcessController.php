<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class formProcessController extends Controller
{
    public function loginCek(Request $request){
        $data = $request->validate([
            'username' =>$request -> input('username'),
            'password' =>$request -> input('password')
        ]);

        if(Auth::attempt($data)){
            return redirect('home');
        }
    }
}
