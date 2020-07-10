<?php

namespace App\Http\Controllers;

use App\Cultural_event;
use App\Category;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CulturalEventRequest;



class CulturalEventController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $users = User::where('role', '=', 'Apprentice')->get();
        return view('cultural_events.create')
             ->with('cultural_events', $cultural_events)
             ->with('users', $users);
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
        $cultural_events->start_date   = $request->start_date;
        $cultural_events->end_date     = $request->end_date ;
        $cultural_events->user_id      = $request->user_id;

        if ($request->hasFile('file')) {
            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('imgs'), $file);
            $cultural_events->file = 'imgs/'.$file;
        }
      

        if($cultural_events->save()) {
                return redirect('cultural_events')->with('message', 'El Evento:  '.$cultural_events->name.'  fué adicionado con Éxito!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       $cultural_events =  Cultural_event::find($id);
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
        $cultural_events = Cultural_event::find($id);
        $users = User::where('role', '=', 'Apprentice')->get();
        return view('cultural_events.edit')
             ->with('cultural_events', $cultural_events)
             ->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cultural_event  $cultural_event
     * @return \Illuminate\Http\Response
     */
    public function update(CulturalEventRequest $request, $id)
    {
        $cultural_events = Cultural_event::find($id);
        $cultural_events->name         = $request->name;
        $cultural_events->description  = $request->description;
        $cultural_events->start_date   = $request->start_date;
        $cultural_events->end_date     = $request->end_date ;
        $cultural_events->user_id      = $request->user_id;

        if ($request->hasFile('file')) {
            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('imgs'), $file);
            $cultural_events->file = 'imgs/'.$file;
        }
       
        if($cultural_events->save()) {
            return redirect('cultural_events')->with('message', 'El Evento:  '.$cultural_events->name.'  fué Modificado con Éxito!');
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
            return redirect('cultural_events')->with('message', 'El Evento:  '.$cultural_events->name.'  fué eliminado con Éxito!');
        }
    }
   
}
