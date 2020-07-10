<?php

namespace App\Http\Controllers;


use App\Training_program;
use Illuminate\Http\Request;
use App\Http\Requests\TrainingProgramRequest;

class TrainingProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainig_programs = Training_program::paginate(20);
        return view('trainig_programs.index')->with('trainig_programs', $trainig_programs); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainig_programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingProgramRequest $request)
    {
        $trainig_programs = new Training_program;
        $trainig_programs->name_program  = $request->name_program;
        $trainig_programs->cod_program   = $request->cod_program;

        if($trainig_programs->save()) {
            return redirect('trainig_programs')->with('message', 'El Programa de Formación: '.$trainig_programs->name_program.' fue adicionada con Exito!');
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
         $trainig_programs = Training_program::findOrFail($id);
        return view('trainig_programs.show')->with('trainig_programs', $trainig_programs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training_program  $training_program
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
         $trainig_programs = Training_program::findOrFail($id);
        return view('trainig_programs.edit')->with('trainig_programs', $trainig_programs);
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
        $trainig_programs = new Training_program;
        $trainig_programs->name_program  = $request->name_program;
        $trainig_programs->cod_program   = $request->cod_program;
         
        if($trainig_programs->save()) {
            return redirect('trainig_programs')->with('message', 'El Programa de Formación: '.$trainig_programs->name_program.' fue modificada con Exito!');
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
        $trainig_programs = Training_program::find($id);
         if($trainig_programs->delete()) {
            return redirect('trainig_programs')->with('message', 'El Programa de Formación: '.$trainig_programs->name_program.' fue eliminada con Exito!');
        }
    }
    }
}
