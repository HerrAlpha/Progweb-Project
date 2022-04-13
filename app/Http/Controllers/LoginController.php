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
            'username' =>'required',
            'password' =>'required'
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/' . auth()->user()->id);
        }

        return back()->with('err','Username atau Password Salah');
    }

}
