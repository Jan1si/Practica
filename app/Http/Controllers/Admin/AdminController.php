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
        $post_collective = PostCollective::all();
        $collective = Collective::all();
        $messages = Message::all();

        return view('pages.admin.view-tables.index',[
            'post_collective' => $post_collective,
            'collective' => $collective,
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

    public function types_document_table(){
        $types = TypeDocument::all();
        return view('pages.admin.view-tables.types_document_table',[
            'types'=>$types
        ]);
    }

    public function collective_table(){
        $collective = Collective::all();
        return view('pages.admin.view-tables.collective_table',[
            'collective'=>$collective
        ]);
    }

    public function posts_collective_table(){
        $posts = PostCollective::all();
        return view('pages.admin.view-tables.posts_collective_table',[
            'posts'=>$posts
        ]);
    }

    public function message_table(){
        $messages = Message::all();
        return view('pages.admin.view-tables.message_table',[
            'messages'=>$messages
        ]);
    }



}
