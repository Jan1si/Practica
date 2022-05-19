<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collective;
use App\Models\PostCollective;
use Illuminate\Http\Request;

class TableCollectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = PostCollective::all();
        return view('pages.admin.add_data.create_collective',[
            'posts'=>$posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collective = new Collective();
        $collective->name = $request->name;
        $collective->postition = $request->position;
        $collective->post_collectives_id = $request->post_collectives;
        $collective->save();
        return redirect()->route('collective_table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collective = Collective::where('id',$id)->get();
        $posts = PostCollective::all();
        return view('pages.admin.edit_data.edit_collective',[
            'collective'=>$collective,
            'posts'=> $posts,
            'id'=>$id
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $collective = Collective::find($id);
        $collective->name = $request->name;
        $collective->postition = $request->position;
        $collective->post_collectives_id = $request->post_collectives;
        $collective->save();
        return redirect()->route('collective_table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Collective::where('id', $id)->delete();
        return redirect()->back();
    }
}
