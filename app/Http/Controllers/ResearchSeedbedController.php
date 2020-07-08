<?php

namespace App\Http\Controllers;

use App\Research_seedbed;
use Illuminate\Http\Request;

class ResearchSeedbedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research_seedbeds = Research_seedbed::paginate(20);
        return view('research_seedbeds.index')->with('research_seedbeds', $research_seedbeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('research_seedbeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $research_seedbeds = new Research_seedbed;
        $research_seedbeds->name_research_seedbed  = $request->name_research_seedbed;
        $research_seedbeds->description            = $request->description;
        $research_seedbeds->days                   = $request->days ;
        $research_seedbeds->start_date             = $request->start_date;
        $research_seedbeds->end_date               = $request->end_date;

        if($research_seedbeds->save()) {
            return redirect('research_seedbeds')->with('message', 'El Semillero: '.$research_seedbeds->name_research_seedbed.' fue adicionado con Exito!');
        }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Research_seedbed  $research_seedbed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $research_seedbeds = Research_seedbed::findOrFail($id);
        return view('research_seedbeds.show')->with('research_seedbeds', $research_seedbeds);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Research_seedbed  $research_seedbed
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $research_seedbeds = Research_seedbed::findOrFail($id);
        return view('research_seedbeds.edit')->with('research_seedbeds', $research_seedbeds);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Research_seedbed  $research_seedbed
     * @return \Illuminate\Http\Response
     */
    public function update(ResearchSeedbedRequest $request, $id)
    {
        $research_seedbeds = Research_seedbed::find($id);
        $research_seedbeds->name_research_seedbed  = $request->name_research_seedbed;
        $research_seedbeds->description            = $request->description;
        $research_seedbeds->days                   = $request->days ;
        $research_seedbeds->start_date             = $request->start_date;
        $research_seedbeds->end_date               = $request->end_date;

        if($research_seedbeds->save()) {
            return redirect('research_seedbeds')->with('message', 'El Semillero: '.$research_seedbeds->name_research_seedbed.' fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Research_seedbed  $research_seedbed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $research_seedbeds = Research_seedbed::find($id);
         if($research_seedbeds->delete()) {
            return redirect('research_seedbeds')->with('message', 'El Semillero: '.$research_seedbeds->name_research_seedbed.' fue eliminado con Exito!');
        }
    }
    public function pdf() {
        //dd('Descargar PDF'); 
        $research_seedbeds = Research_seedbed::all();
        $pdf = \PDF::loadView('research_seedbeds.pdf', compact('research_seedbeds'));
        return $pdf->download('allresearch_seedbeds.pdf');
    }

    public function excel() {
        return \Excel::download(new Research_seedbedExport, 'allresearch_seedbeds.xlsx');
    }

    public function import(Request $request) {
        $file = $request->file('file');
        \Excel::import(new Research_seedbedImport, $file);
        return redirect()->back()->with('message', 'Los Semilleros se importaron con exito!');
    }

}
