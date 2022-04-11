<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function teamID(){
        $teamID = new \stdClass();
        $teamID -> id=0;
        $teamID -> name='Mohammad Agung Rizki';
        $teamID -> NIM = '210535614806';
        $teamID -> born = 'Malang, 21 Juli 2003';
        $teamID -> peran='Founder - Frontend Developer - Flutter Developer - DB Engineering - Product Manager';
        $teamID -> pictureurl = '/assets/picture/team/mohammad.jpg';
        $teamID -> link = 'team/mohammad';

        $teamID1 = new \stdClass();
        $teamID1 -> id=1;
        $teamID1 -> name='M. Baharudin Yusuf';
        $teamID1 -> NIM = '210535614861';
        $teamID1 -> born = 'Malang, 08 Juni 2003';
        $teamID1 -> peran='Co-Founder - Backend Developer - DB Engineering';
        $teamID1 -> pictureurl = '/assets/picture/team/baharudin.jpg';
        $teamID1 -> link = 'team/baharudin';

        $teamID2 = new \stdClass();
        $teamID2 -> id=2;
        $teamID2 -> name='Shohwatul Hana';
        $teamID2 -> NIM = '210535614883';
        $teamID2 -> born = 'Malang, 17 April 2003';
        $teamID2 -> peran='Co-Founder - Assistant';
        $teamID2 -> pictureurl = '/assets/picture/team/shohwatul.jpg';
        $teamID2 -> link = 'team/shohwatul';

        $teamID3 = new \stdClass();
        $teamID3 -> id=3;
        $teamID3 -> name='Maria Gabyelent Gea';
        $teamID3 -> NIM = '210535614862';
        $teamID3 -> born = 'Kayuagung, 18 Januari 2004';
        $teamID3 -> peran='Co-Founder - Assistant';
        $teamID3 -> pictureurl = '/assets/picture/team/maria.jpg';
        $teamID3 -> link = 'team/maria';

        $teamID4 = new \stdClass();
        $teamID4 -> id=4;
        $teamID4 -> name='Roudhotulloh Nazakhan';
        $teamID4 -> NIM = '210535614813';
        $teamID4 -> born = 'Nganjuk, 22 April 2003';
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
        $teamID = $teamIDs->pluck('name')->all();
        return view('team',compact('teamID'));

    }
}
