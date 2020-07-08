<?php

namespace App\Http\Controllers; 

use App\Quarters;
use Illuminate\Http\Request;
use App\Http\Requests\QuartersRequest;

class QuartersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quarters = Quarters::paginate(20);
        return view('quarters.index')->with('quarters', $quarters); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quarters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuartersRequest $request)
    {
        $quarters = new Quarters;
        $quarters->num_quarter  = $request->num_quarter;
        $quarters->start_date   = $request->start_date;
        $quarters->end_date     = $request->end_date ;

        if($quarters->save()) {
                return redirect('quarters')->with('message', 'El Trimestre fue adicionado con Exito!');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quarters  $quarters
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quarters = Quarters::findOrFail($id);
        return view('quarters.show')->with('quarters', $quarters);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quarters  $quarters
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quarters = Quarters::findOrFail($id);
        return view('quarters.edit')->with('quarters', $quarters);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quarters  $quarters
     * @return \Illuminate\Http\Response
     */
    public function update(QuartersRequest $request, Quarters $quarters)
    {
        $quarters = Quarters::find($id);
        $quarters->num_quarter  = $request->num_quarter;
        $quarters->start_date   = $request->start_date;
        $quarters->end_date     = $request->end_date ;
        if($quarters->save()) {
            return redirect('quarters')->with('message', 'El Trimestre fue modificado con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quarters  $quarters
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quarters = Quarters::find($id);
         if($quarters->delete()) {
            return redirect('quarters')->with('message', 'El Trimestre fue eliminado con Exito!');
        }
    }
    public function pdf() {
        //dd('Descargar PDF');
        $quarters = Quarters::all();
        $pdf = \PDF::loadView('quarters.pdf', compact('quarters'));
        return $pdf->download('allquarters.pdf');
    }

    public function excel() {
        return \Excel::download(new QuartersExport, 'allquarters.xlsx');
    }

    public function import(Request $request) {
        $file = $request->file('file');
        \Excel::import(new QuartersImport, $file);
        return redirect()->back()->with('message', 'Los trimestres se importaron con exito!');
    }
}
