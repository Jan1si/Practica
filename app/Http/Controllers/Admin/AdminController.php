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
        $users = User::all();
        $roles = Role::all();
        $type_documents = TypeDocument::all();
        $post_collective = PostCollective::all();
        $documents = Documents::all();
        $collective = Collective::all();
        $news = News::all();
        $messages = Message::all();

        return view('pages.admin.view-tables.index',[
            'users' => $users,
            'roles' => $roles,
            'type_documents' => $type_documents,
            'post_collective' => $post_collective,
            'documents' => $documents,
            'collective' => $collective,
            'news' => $news,
            'messages' => $messages
        ]);
    }
}
