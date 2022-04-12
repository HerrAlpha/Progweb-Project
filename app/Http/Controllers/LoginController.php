<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request){
        $data = $request->validate([
            'username' =>$request -> input('username'),
            'password' =>$request -> input('password')
        ]);

        if(Auth::attempt($data)){
            return redirect('home');
        }
    }

}
