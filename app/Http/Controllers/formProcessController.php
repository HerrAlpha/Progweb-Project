<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formProcessController extends Controller
{
    public function loginCek(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|unique:users'
        ]);
    }
}
