<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DownloadController extends Controller
{
    public function index(Post $download)
    {
        // $download = 'storage/'+$download->file;
        return response()->download('storage/'.$download->file);
    }

}
