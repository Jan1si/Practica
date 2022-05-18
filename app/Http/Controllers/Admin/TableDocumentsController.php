<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use App\Models\TypeDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TableDocumentsController extends Controller
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
        $types = TypeDocument::all();
        return view('pages.admin.add_data.create_document',[
            'types' => $types
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
        $path = $request->file('doc')->store('doc/', 'public');
        $size = substr(($request->doc->getSize()/1024)/1024, 0, 3);
        $document = new Documents();
        $document->name_doc = $request->file('doc')->getClientOriginalName();
        $document->size_doc = $size;
        $document->path_doc = $path;
        $document->type_documents_id  = $request->type;
        $document->save();
        return redirect()->route('documents_table');
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
        $documents = Documents::where('id', $id)->get();
        $types = TypeDocument::all();
        return view('pages.admin.edit_data.edit_document',[
            'documents' => $documents,
            'types' => $types,
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

        $document = Documents::find($id);
        $document->type_documents_id  = $request->type;
        $document->save();
        return redirect()->route('documents_table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Documents::where('id', $id)->delete();
        return redirect()->back();
    }
}
