<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SettingController extends Controller
{

    public function index(User $user){
        $user = User::where('id',auth()->user()->id)->get();
        return view('dashboard.update-profile',compact('user'));
    }

    public function update(){

    }

}
