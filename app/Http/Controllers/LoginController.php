<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

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
            // return redirect()->intended('/dashboard/' . auth()->user()->id);
            return redirect()->intended('/dashboard');
        }

        return back()->with('err','Username atau Password Salah');
    }

    public function forgotpass(){
        return view('forgotpass');
    }

    public function forgotpass2(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink( $request->only('email') );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }

}
