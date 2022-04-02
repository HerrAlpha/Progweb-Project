<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function web(){
        $categories00 =new \stdClass();
        $categories00->id = 0;
        $categories00->name = 'All';
        $categories00->slug = 'all';
        $categories00->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories00->link = 'web/categories/all';

        $categories01 =new \stdClass();
        $categories01->id = 1;
        $categories01->name = 'Technology';
        $categories01->slug = 'technology';
        $categories01->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories01->link = 'web/categories/technology';

        $categories02 =new \stdClass();
        $categories02->id = 2;
        $categories02->name = 'Business';
        $categories02->slug = 'business';
        $categories02->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories02->link = 'web/categories/business';

        $categories03 =new \stdClass();
        $categories03->id = 3;
        $categories03->name = 'Entertainment';
        $categories03->slug = 'entertainment';
        $categories03->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories03->link = 'web/categories/entertainment';

        $categories04 =new \stdClass();
        $categories04->id = 4;
        $categories04->name = 'Health';
        $categories04->slug = 'health';
        $categories04->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories04->link = 'web/categories/health';

        $categories05 =new \stdClass();
        $categories05->id = 5;
        $categories05->name = 'Science';
        $categories05->slug = 'science';
        $categories05->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories05->link = 'web/categories/science';

        $categories06 =new \stdClass();
        $categories06->id = 6;
        $categories06->name = 'Sports';
        $categories06->slug = 'sports';
        $categories06->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories06->link = 'web/categories/sports';

        $categories07 =new \stdClass();
        $categories07->id = 7;
        $categories07->name = 'Travel';
        $categories07->slug = 'travel';
        $categories07->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories07->link = 'web/categories/travel';

        $categories08 =new \stdClass();
        $categories08->id = 8;
        $categories08->name = 'Gaming';
        $categories08->slug = 'gaming';
        $categories08->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories08->link = 'web/categories/gaming';

        $categories09 =new \stdClass();
        $categories09->id = 9;
        $categories09->name = 'Music';
        $categories09->slug = 'music';
        $categories09->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories09->link = 'web/categories/music';

        $categories10 =new \stdClass();
        $categories10->id = 10;
        $categories10->name = 'News';
        $categories10->slug = 'news';
        $categories10->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories10->link = 'web/categories/news';

        $categories11 =new \stdClass();
        $categories11->id = 11;
        $categories11->name = 'Finance';
        $categories11->slug = 'finance';
        $categories11->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories11->link = 'web/categories/finance';

        $categories12 =new \stdClass();
        $categories12->id = 12;
        $categories12->name = 'Food';
        $categories12->slug = 'food';
        $categories12->pictureurl = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
        $categories12->link = 'web/categories/food';

        $categorieses =collect([$categories00, $categories01, $categories02, $categories03, $categories04, $categories05, $categories06, $categories07, $categories08, $categories09, $categories10, $categories11, $categories12]);

        $p = $categorieses->pluck('name')->all();

        return view('web',compact('p'));
    }
    public function appCategories(){
        $categories00 = new \stdClass();
        $categories00 -> id=0;
        $categories00 -> name='All';
        $categories00 -> pictureurl = '/assets/picture/app/category/all.png';
        $categories00 -> link = 'app/categories/all';

        $categories01 = new \stdClass();
        $categories01 -> id=1;
        $categories01 -> name='Sport';
        $categories01 -> pictureurl = '/assets/picture/app/category/all.png';
        $categories01 -> link = 'app/categories/sport';


    }

    public function home(){
        return view('home');
    }
    public function templates(){
        return view('template');
    }

    public function app(){
        return view('app');
    }
    public function about(){
        return view('about');
    }
    public function news(){
        return view('news');
    }
    public function error(){
        return view('error');
    }
}
