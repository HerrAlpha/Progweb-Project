<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DownloadController extends Controller
{
    public function index(Post $download)
    {
        return response()->download('storage/'.$download->file);
        // return response()->download('storage/'.$download->file,$download->title,['Content-Type' => 'multipart/form-data']);
    }

}
