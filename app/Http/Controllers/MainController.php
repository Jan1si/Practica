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
        return view('pages.index.index', [
            'news'=>$news
        ]);
    }

    public function about_us(){
        return view('pages.about.about_us');
    }

    public function collective(){
        $main = Collective::where('role','main')->get();
        $minor = Collective::where('role','minor')->get();
        $rest = Collective::where('role','rest')->get();

        return view('pages.collective.collective',[
            'main' => $main,
            'minor' => $minor,
            'rest' => $rest
        ]);
    }

    public function conditions(){
        $documnets = Documents::all();
        $arr = Documents::all()->toArray();
        return view('pages.conditions.conditions',[
            'documents'=>$documnets,
            'arr'=>$arr
        ]);
    }

    public function finance(){
        $documnets = Documents::all();
        return view('pages.finance.finance',[
            'documnets'=> $documnets
        ]);
    }

    public function documents(){
        $documnets = Documents::all();
        return view('pages.documents.documents',[
            'documnets'=> $documnets
        ]);
    }

    public function links(){
        return view('pages.links.links');
    }

    public function contacts(){
        return view('pages.contacts.contacts');
    }

    public function profile(){
        return view('pages.profile.index');
    }

    public function signin(){
        return view('pages.auth.signin');
    }

    public function signup(){
        return view('pages.auth.signup');
    }


}
