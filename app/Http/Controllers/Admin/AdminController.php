<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collective;
use App\Models\Documents;
use App\Models\Message;
use App\Models\News;
use App\Models\PostCollective;
use App\Models\Role;
use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function  admin_index(){
        $type_documents = TypeDocument::all();
        $post_collective = PostCollective::all();
        $documents = Documents::all();
        $collective = Collective::all();
        $news = News::all();
        $messages = Message::all();

        return view('pages.admin.view-tables.index',[
            'type_documents' => $type_documents,
            'post_collective' => $post_collective,
            'documents' => $documents,
            'collective' => $collective,
            'news' => $news,
            'messages' => $messages
        ]);
    }

    public function users_table(){
        $users = User::all();
        return view('pages.admin.view-tables.users_table',[
            'users'=>$users
        ]);
    }

    public function roles_table(){
        $roles = Role::all();
        return view('pages.admin.view-tables.role_table',[
            'roles'=>$roles
        ]);
    }

    public function news_table(){
        $news = News::all();
        return view('pages.admin.view-tables.news_table',[
            'news'=>$news
        ]);
    }

    public function documents_table(){
        $documents = Documents::all();
        return view('pages.admin.view-tables.documents_table',[
            'documents'=>$documents
        ]);
    }

}
