<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DownloadController extends Controller
{
    public function index()
    {
        return view('download.download');
    }

    public function indexPage(id $id){
        return view('download.download');
    }
}
