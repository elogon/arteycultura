<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use App\Http\Requests\PublicationRequest;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $publications = Publication::paginate(20);
        return view('publications.index')->with('publications', $publications); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $publication = new Publication;
        $publication->title         = $request->title;
        $publication->description   = $request->description;
        if ($request->hasFile('file')) {
            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('imgs'), $file);
            $publication->file = 'imgs/'.$file;
        }
        if($publication->save()) {
            return redirect('publications')->with('message', 'La Publicación: '.$publication->name.' fue adicionada con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);
        return view('publications.show')->with('publication', $publication);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        return view('publications.edit')->with('publication', $publication);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationRequest $request, $id)
    {
        $publication = new Publication::find($id);
        $publication->title         = $request->title;
        $publication->description   = $request->description;
        if ($request->hasFile('file')) {
            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('imgs'), $file);
            $publication->file = 'imgs/'.$file;
        }
        if($publication->save()) {
            return redirect('publications')->with('message', 'La Publicación: '.$publication->name.' fue modificada con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Publication::find($id);
         if($publication->delete()) {
            return redirect('publications')->with('message', 'La Publicación: '.$publication->name.' fue eliminada con Exito!');
        }
    }
}
