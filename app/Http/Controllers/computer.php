<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class computer extends Controller
{
    public function computer(){
        $url1 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=10&q=computer%technology%new';
        $newsA = file_get_contents($url1);
        $newsA = json_decode($newsA);
        $newsA = $newsA->articles;

        return view ('news',['newsA'=>$newsA]);
    }
}
