<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class automotive extends Controller
{
    public function automotive(){
        $url2 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=10&q=automotive%new%eco';
        $newsB = file_get_contents($url2);
        $newsB =json_decode($newsB);
        $newsB = $newsB->articles;

        return view('news',['newsB'=>$newsB]);
    }
}
