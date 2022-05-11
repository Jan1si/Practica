<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Collective;
use App\Models\Documents;

class MainController extends Controller
{
    public function index(){
        $news = News::all();
        return view('pages.index', [
            'news'=>$news
        ]);
    }

    public function about_us(){
        return view('pages.about_us');
    }

    public function collective(){
        $main = Collective::where('role','main')->get();
        $minor = Collective::where('role','minor')->get();
        $rest = Collective::where('role','rest')->get();

        return view('pages.collective',[
            'main' => $main,
            'minor' => $minor,
            'rest' => $rest
        ]);
    }

    public function conditions(){
        $documnet = Documents::where('type', 'type_3')->get();
        return view('pages.conditions',[
            'document'=>$documnet
        ]);
    }
    
    public function finance(){
        return view('pages.finance');
    }

    public function documents(){
        $documnet_one = Documents::where('type', 'type_1')->get();
        $documnet_two = Documents::where('type', 'type_2')->get();
        return view('pages.documents',[
            'documnet_one'=> $documnet_one,
            'documnet_two' =>$documnet_two
        ]);
    }

    public function links(){
        return view('pages.links');
    }

    public function contacts(){
        return view('pages.contacts');
    }
}
