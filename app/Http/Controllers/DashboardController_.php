<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function dash(User $user){
        return view('dashboard.index',compact('user'));
    }
}
