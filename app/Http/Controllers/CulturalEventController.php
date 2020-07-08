<?php

namespace App\Http\Controllers;

use App\Cultural_event;
use Illuminate\Http\Request;
use App\Http\Requests\CulturalEventRequest;

use App\Exports\Cultural_eventsExport;
//Import
use App\Imports\Cultural_eventsImport;

class CulturalEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cultural_events = Cultural_event::paginate(20);
        return view('cultural_events.index')->with('cultural_events', $cultural_events); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cultural_events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CulturalEventRequest $request)
    {
        $cultural_events = new Cultural_event;
        $cultural_events->name         = $request->name;
        $cultural_events->description  = $request->description;
        if ($request->hasFile('file')) {
            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('imgs'), $file);
            $cultural_events->file = 'imgs/'.$file;
        }
        $cultural_events->start_date   = $request->start_date;
        $cultural_events->end_date     = $request->end_date ;
        $cultural_events->stand_out    = $request->stand_out ;

        if($cultural_events->save()) {
                return redirect('cultural_events')->with('message', 'El evento fue adicionado con Exito!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cultural_events = Cultural_event::findOrFail($id);
        return view('cultural_events.show')->with('cultural_events', $cultural_events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cultural_events = Cultural_event::findOrFail($id);
        return view('cultural_events.edit')->with('cultural_events', $cultural_events);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function update(CulturalEventRequest $request, Cultural_event $cultural_event)
    {
        $cultural_events = Cultural_event::find($id);
        $cultural_events->name         = $request->name;
        $cultural_events->description  = $request->description;
        $cultural_events->file         = $request->file;
        $cultural_events->start_date   = $request->start_date;
        $cultural_events->end_date     = $request->end_date ;
        $cultural_events->stand_out    = $request->stand_out ;
        if($cultural_events->save()) {
            return redirect('cultural_events')->with('message', 'El evento fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cultural_events = Cultural_event::find($id);
         if($cultural_events->delete()) {
            return redirect('cultural_events')->with('message', 'El evento fue eliminado con Exito!');
        }
    }
    public function pdf() {
        //dd('Descargar PDF');
        $cultural_events = Cultural_event::all();
        $pdf = \PDF::loadView('cultural_events.pdf', compact('cultural_events'));
        return $pdf->download('allcultural_events.pdf');
    }

    public function excel() {
        return \Excel::download(new Cultural_eventExport, 'allcultural_events.xlsx');
    }

    public function import(Request $request) {
        $file = $request->file('file');
        \Excel::import(new Cultural_eventImport, $file);
        return redirect()->back()->with('message', 'Los eventos se importaron con exito!');
    }
}
