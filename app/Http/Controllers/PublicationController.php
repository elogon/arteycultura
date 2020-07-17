<?php

namespace App\Http\Controllers;

use App\Publication;
use App\User;
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
       $users  = User::all();
        return view('publications.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $publications = new Publication;
        $publications->title            = $request->title;
        $publications->description      = $request->description;
        $publications->user_id          = $request->user_id;
       

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $request->file->move(public_path('imgs'), $name);
            $publications->file = 'imgs/'.$name;
        }
        if($publications->save()) {
                return redirect('publications')->with('message', 'La Publicación:  '.$publications->title.'  fué adicionada con Éxito!');
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
        $publications =  Publication::find($id);
       return view('publications.show')->with('publications', $publications);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users  = User::all();
        $publications = Publication::find($id);
        return view('publications.edit')
             ->with('publications', $publications)
             ->with('users', $users);
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
        $publications = Publication::find($id);
        $publications->title            = $request->title;
        $publications->description      = $request->description;
        $publications->user_id          = $request->user_id;
       
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = $file->getClientOriginalName();
            $request->file->move(public_path('imgs'), $name);
            $publications->file = 'imgs/'.$name;
        }
        if($publications->save()) {
            return redirect('publications')->with('message', 'La Publicación:  '.$publications->title.'  fué Modificada con Éxito!');
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
       $publications = Publication::find($id);
         if($publications->delete()) {
            return redirect('publications')->with('message', 'La Publicación:  '.$publications->title.'  fué eliminado con Éxito!');
        }
    }
}
