<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programmer extends Controller
{
    public function programmer(){

        $url3 = 'https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&title,description=template%web,%template%for%design%website&pageSize=10&q=web%template%code%design';
        $newsC = file_get_contents($url3);
        $newsC = json_decode($newsC);
        $newsC = $newsC->articles;

        return view('news',compact('newsC'));
    }
}
