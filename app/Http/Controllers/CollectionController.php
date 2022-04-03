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
        $appCat00 = new \stdClass();
        $appCat00 -> id=0;
        $appCat00 -> name='All';
        $appCat00 -> pictureurl = '/assets/picture/app/category/all.png';
        $appCat00 -> link = 'app/categories/all';

        $appCat01 = new \stdClass();
        $appCat01 -> id=1;
        $appCat01 -> name='Sport';
        $appCat01 -> pictureurl = '/assets/picture/app/category/sport.png';
        $appCat01 -> link = 'app/categories/sport';

        $appCat02 = new \stdClass();
        $appCat02 -> id=2;
        $appCat02 -> name='Technology';
        $appCat02 -> pictureurl = '/assets/picture/app/category/technology.png';
        $appCat02 -> link = 'app/categories/technology';

        $appCat03 = new \stdClass();
        $appCat03 -> id=3;
        $appCat03 -> name='Business';
        $appCat03 -> pictureurl = '/assets/picture/app/category/business.png';
        $appCat03 -> link = 'app/categories/business';

        $appCat04 = new \stdClass();
        $appCat04 -> id=4;
        $appCat04 -> name='Entertainment';
        $appCat04 -> pictureurl = '/assets/picture/app/category/entertainment.png';
        $appCat04 -> link = 'app/categories/entertainment';

        $appCat05 = new \stdClass();
        $appCat05 -> id=5;
        $appCat05 -> name='Health';
        $appCat05 -> pictureurl = '/assets/picture/app/category/health.png';
        $appCat05 -> link = 'app/categories/health';

        $appCat06 = new \stdClass();
        $appCat06 -> id=6;
        $appCat06 -> name='Science';
        $appCat06 -> pictureurl = '/assets/picture/app/category/science.png';
        $appCat06 -> link = 'app/categories/science';

        $appCat07 = new \stdClass();
        $appCat07 -> id=7;
        $appCat07 -> name='Transport';
        $appCat07 -> pictureurl = '/assets/picture/app/category/transport.png';
        $appCat07 -> link = 'app/categories/transport';

        $appCat08 = new \stdClass();
        $appCat08 -> id=8;
        $appCat08 -> name='Travel';
        $appCat08 -> pictureurl = '/assets/picture/app/category/travel.png';
        $appCat08 -> link = 'app/categories/travel';

        $appCat09 = new \stdClass();
        $appCat09 -> id=9;
        $appCat09 -> name='Gaming';
        $appCat09 -> pictureurl = '/assets/picture/app/category/gaming.png';
        $appCat09 -> link = 'app/categories/gaming';

        $appCat10 = new \stdClass();
        $appCat10 -> id=10;
        $appCat10 -> name='Music';
        $appCat10 -> pictureurl = '/assets/picture/app/category/music.png';
        $appCat10 -> link = 'app/categories/music';

        $appCat11 = new \stdClass();
        $appCat11 -> id=11;
        $appCat11 -> name='News';
        $appCat11 -> pictureurl = '/assets/picture/app/category/news.png';
        $appCat11 -> link = 'app/categories/news';

        $appCat12 = new \stdClass();
        $appCat12 -> id=12;
        $appCat12 -> name='Finance';
        $appCat12 -> pictureurl = '/assets/picture/app/category/finance.png';
        $appCat12 -> link = 'app/categories/finance';

        $appCat13 = new \stdClass();
        $appCat13 -> id=13;
        $appCat13 -> name='Food';
        $appCat13 -> pictureurl = '/assets/picture/app/category/food.png';
        $appCat13 -> link = 'app/categories/food';

        $appCates =collect([$appCat00, $appCat01, $appCat02, $appCat03, $appCat04, $appCat05, $appCat06, $appCat07, $appCat08, $appCat09, $appCat10, $appCat11, $appCat12, $appCat13]);
        $appCat = $appCates->pluck('name')->all();
        return view('app',compact('appCat'));
    }

    public function teamID(){
        $teamID = new \stdClass();
        $teamID -> id=0;
        $teamID -> name='Mohammad Agung Rizki';
        $teamID -> NIM = '210535614806';
        $teamID -> born = 'Malang, 21 Juli 2003';
        $teamID -> peran='Founder - Frontend Developer - Flutter Developer';
        $teamID -> pictureurl = '/assets/picture/team/mohammad.jpg';
        $teamID -> link = 'team/mohammad';

        $teamID1 = new \stdClass();
        $teamID1 -> id=1;
        $teamID1 -> name='Baharudin Yusuf';
        $teamID1 -> NIM = '210535614807';
        $teamID1 -> born = 'Malang, 21 Juli 2003';
        $teamID1 -> peran='Co-Founder - Backend Developer';
        $teamID1 -> pictureurl = '/assets/picture/team/baharudin.jpg';
        $teamID1 -> link = 'team/baharudin';

        $teamID2 = new \stdClass();
        $teamID2 -> id=2;
        $teamID2 -> name='Shohwatul Hana';
        $teamID2 -> NIM = '210535614808';
        $teamID2 -> born = 'Malang, 21 Juli 2003';
        $teamID2 -> peran='Co-Founder - Assistant';
        $teamID2 -> pictureurl = '/assets/picture/team/shohwatul.jpg';
        $teamID2 -> link = 'team/shohwatul';

        $teamID3 = new \stdClass();
        $teamID3 -> id=3;
        $teamID3 -> name='Maria Gabyelent Gea';
        $teamID3 -> NIM = '210535614809';
        $teamID3 -> born = 'Malang, 21 Juli 2003';
        $teamID3 -> peran='Co-Founder - Assistant';
        $teamID3 -> pictureurl = '/assets/picture/team/maria.jpg';
        $teamID3 -> link = 'team/maria';

        $teamID4 = new \stdClass();
        $teamID4 -> id=4;
        $teamID4 -> name='Roudhotulloh Nazakhan';
        $teamID4 -> NIM = '210535614810';
        $teamID4 -> born = 'Malang, 21 Juli 2003';
        $teamID4 -> peran='Co-Founder - DB Developer';
        $teamID4 -> pictureurl = '/assets/picture/team/roudhotulloh.jpg';
        $teamID4 -> link = 'team/roudhotulloh';

        $teamID5 = new \stdClass();
        $teamID5 -> id=5;
        $teamID5 -> name='GitHub Copilot';
        $teamID5 -> NIM = 'Null';
        $teamID5 -> born = 'Null';
        $teamID5 -> peran='Bot Assistant';
        $teamID5 -> pictureurl = '/assets/picture/team/github.jpg';
        $teamID5 -> link = 'team/github';

        $teamIDs =collect([$teamID, $teamID1, $teamID2, $teamID3, $teamID4, $teamID5]);
        $teamID = $teamIDes->pluck('name')->all();
        return view('team',compact('teamID'));

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
