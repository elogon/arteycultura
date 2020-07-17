<?php

namespace App\Http\Controllers;


use App\Training_program;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingProgramRequest;
use Auth;

class TrainingProgramController extends Controller
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
        $training_programs = Training_program::paginate(20);
        return view('training_programs.index')->with('training_programs', $training_programs); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training_programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingProgramRequest $request)
    {
        $training_programs = new Training_program;
        $training_programs->name_program  = $request->name_program;
        $training_programs->cod_program   = $request->cod_program;

        if($training_programs->save()) {
            return redirect('training_programs')->with('message', 'El Programa de Formación: '.$training_programs->name_program.' fue adicionada con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training_program  $training_program
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $training_programs = Training_program::findOrFail($id);
        return view('training_programs.show')->with('training_programs', $training_programs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training_program  $training_program
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
         $training_programs = Training_program::findOrFail($id);
        return view('training_programs.edit')->with('training_programs', $training_programs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training_program  $training_program
     * @return \Illuminate\Http\Response
     */
    public function update(TrainingProgramRequest $request, $id)
    {
        $training_programs = new Training_program;
        $training_programs->name_program  = $request->name_program;
        $training_programs->cod_program   = $request->cod_program;
         
        if($training_programs->save()) {
            return redirect('training_programs')->with('message', 'El Programa de Formación: '.$training_programs->name_program.' fue modificada con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training_program  $training_program
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $training_programs = Training_program::find($id);
         if($training_programs->delete()) {
            return redirect('training_programs')->with('message', 'El Programa de Formación: '.$training_programs->name_program.' fue eliminada con Exito!');
        }
    }
}
