<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    public function web(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'web/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = '/technology.png';
        $categories01->link = 'web/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = '/business.png';
        $categories02->link = 'web/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = '/entertainment.png';
        $categories03->link = 'web/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = '/health.png';
        $categories04->link = 'web/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = '/science.png';
        $categories05->link = 'web/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sport';
        $categories06->slug = 'sport';
        $categories06->pictureurl = '/sport.png';
        $categories06->link = 'web/sport';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = '/travel.png';
        $categories07->link = 'web/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = '/gaming.png';
        $categories08->link = 'web/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = '/music.png';
        $categories09->link = 'web/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = '/news.png';
        $categories10->link = 'web/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = '/finance.png';
        $categories11->link = 'web/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = '/food.png';
        $categories12->link = 'web/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $names = $categorieses->pluck('name');
        $links = $categorieses->pluck('link');
        $imgs = $categorieses->pluck('pictureurl');
        return view('template.web',['names'=>$names,'links'=>$links,'imgs'=>$imgs]);
    }
    public function appCategories(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'apps/categories/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = 'technology.png';
        $categories01->link = 'apps/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = 'business.png';
        $categories02->link = 'apps/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = 'entertainment.png';
        $categories03->link = 'apps/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = 'health.png';
        $categories04->link = 'apps/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = 'science.png';
        $categories05->link = 'apps/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sports';
        $categories06->slug = 'sports';
        $categories06->pictureurl = 'sport.png';
        $categories06->link = 'apps/sports';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = 'travel.png';
        $categories07->link = 'apps/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = 'gaming.png';
        $categories08->link = 'apps/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = 'music.png';
        $categories09->link = 'apps/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = 'news.png';
        $categories10->link = 'apps/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = 'finance.png';
        $categories11->link = 'apps/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = 'food.png';
        $categories12->link = 'apps/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $namesApp = $categorieses->pluck('name');
        $linksApp = $categorieses->pluck('link');
        $imgsApp = $categorieses->pluck('pictureurl');
        return view('app',['namesApp'=>$namesApp,'linksApp'=>$linksApp,'imgsApp'=>$imgsApp]);
    }

    public function templates(){
        if (Auth::check()){
            $users = User::where('id',auth()->user()->id)->get();
            return view('template',['users'=>$users]);
             }else{
                  return view('template');
                }
    }
    public function mobileApp(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'mobile-app/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = '/technology.png';
        $categories01->link = 'mobile-app/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = '/business.png';
        $categories02->link = 'mobile-app/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = '/entertainment.png';
        $categories03->link = 'mobile-app/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = '/health.png';
        $categories04->link = 'mobile-app/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = '/science.png';
        $categories05->link = 'mobile-app/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sport';
        $categories06->slug = 'sport';
        $categories06->pictureurl = '/sport.png';
        $categories06->link = 'mobile-app/sport';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = '/travel.png';
        $categories07->link = 'mobile-app/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = '/gaming.png';
        $categories08->link = 'mobile-app/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = '/music.png';
        $categories09->link = 'mobile-app/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = '/news.png';
        $categories10->link = 'mobile-app/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = '/finance.png';
        $categories11->link = 'mobile-app/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = '/food.png';
        $categories12->link = 'mobile-app/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $names = $categorieses->pluck('name');
        $links = $categorieses->pluck('link');
        $imgs = $categorieses->pluck('pictureurl');
        return view('template.mobileApp',['names'=>$names,'links'=>$links,'imgs'=>$imgs]);
    }
    public function desktopApp(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'desktop-app/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = '/technology.png';
        $categories01->link = 'desktop-app/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = '/business.png';
        $categories02->link = 'desktop-app/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = '/entertainment.png';
        $categories03->link = 'desktop-app/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = '/health.png';
        $categories04->link = 'desktop-app/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = '/science.png';
        $categories05->link = 'desktop-app/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sport';
        $categories06->slug = 'sport';
        $categories06->pictureurl = '/sport.png';
        $categories06->link = 'desktop-app/sport';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = '/travel.png';
        $categories07->link = 'desktop-app/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = '/gaming.png';
        $categories08->link = 'desktop-app/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = '/music.png';
        $categories09->link = 'desktop-app/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = '/news.png';
        $categories10->link = 'desktop-app/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = '/finance.png';
        $categories11->link = 'desktop-app/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = '/food.png';
        $categories12->link = 'desktop-app/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $names = $categorieses->pluck('name');
        $links = $categorieses->pluck('link');
        $imgs = $categorieses->pluck('pictureurl');
        return view('template.desktopApp',['names'=>$names,'links'=>$links,'imgs'=>$imgs]);
    }
    public function hybrid(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'hybrid/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = '/technology.png';
        $categories01->link = 'hybrid/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = '/business.png';
        $categories02->link = 'hybrid/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = '/entertainment.png';
        $categories03->link = 'hybrid/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = '/health.png';
        $categories04->link = 'hybrid/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = '/science.png';
        $categories05->link = 'hybrid/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sport';
        $categories06->slug = 'sport';
        $categories06->pictureurl = '/sport.png';
        $categories06->link = 'hybrid/sport';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = '/travel.png';
        $categories07->link = 'hybrid/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = '/gaming.png';
        $categories08->link = 'hybrid/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = '/music.png';
        $categories09->link = 'hybrid/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = '/news.png';
        $categories10->link = 'hybrid/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = '/finance.png';
        $categories11->link = 'hybrid/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = '/food.png';
        $categories12->link = 'hybrid/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $names = $categorieses->pluck('name');
        $links = $categorieses->pluck('link');
        $imgs = $categorieses->pluck('pictureurl');
        return view('template.hybrid',['names'=>$names,'links'=>$links,'imgs'=>$imgs]);
    }

    public function home(){
       if (Auth::check()){
        $users = User::where('id',auth()->user()->id)->get();
        return view('home',['users'=>$users]);
         }else{
              return view('home');
            }
    }

    // public function apps(){
    //     return view('app');
    // }
    public function about(){
        if (Auth::check()){
            $users = User::where('id',auth()->user()->id)->get();
            return view('about',['users'=>$users]);
             }else{
                  return view('about');
                }
    }

    public function news(){
        if (Auth::check()){
            $users = User::where('id',auth()->user()->id)->get();
            $url1 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=12&q=computer%technology%new';
        $newsA = file_get_contents($url1);
        $newsA = json_decode($newsA);
        $newsA = $newsA->articles;

        $url2 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=12&q=automotive%new%eco';
        $newsB = file_get_contents($url2);
        $newsB =json_decode($newsB);
        $newsB = $newsB->articles;


        $url3 = 'https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&title,description=template%web,%template%for%design%website&pageSize=12&q=web%template%code%design';
        $newsC = file_get_contents($url3);
        $newsC = json_decode($newsC);
        $newsC = $newsC->articles;


        return view('news',['newsC'=>$newsC,'newsB'=>$newsB,'newsA'=>$newsA, 'users'=>$users]);
            
             }else{
                $url1 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=12&q=computer%technology%new';
                $newsA = file_get_contents($url1);
                $newsA = json_decode($newsA);
                $newsA = $newsA->articles;
        
                $url2 ='https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&pageSize=12&q=automotive%new%eco';
                $newsB = file_get_contents($url2);
                $newsB =json_decode($newsB);
                $newsB = $newsB->articles;
        
        
                $url3 = 'https://newsapi.org/v2/everything?apikey=b051bfc4e04f4a8f82e2cdaa9dadc71b&language=en&title,description=template%web,%template%for%design%website&pageSize=12&q=web%template%code%design';
                $newsC = file_get_contents($url3);
                $newsC = json_decode($newsC);
                $newsC = $newsC->articles;
        
        
                return view('news',['newsC'=>$newsC,'newsB'=>$newsB,'newsA'=>$newsA]);
                }
    }
    public function error(){
        return view('error');
    }
}
