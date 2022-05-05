<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Settings extends Controller
{
    public function index(User $user){
        return view('settings.index')->compact('user');
    }
}
