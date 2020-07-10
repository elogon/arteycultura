<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ResearchSeedbedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method() == 'PUT') {
            // Form edit
            return [
            'name_research_seedbed'  => 'required|min:4',
            'description'            => 'required',
            'num_document'           => 'required',
            'days'                   => 'required|date',
            'start_date'             => 'required|date',
            'end_date'               => 'required|date',
            'quarters_id'            => 'required',
            'category_id'            => 'required'
        ];
        }else{
            // Form create
             return [
            'name_research_seedbed'  => 'required|unique:research_seedbeds|min:4',
            'description'            => 'required',
            'num_document'           => 'required',
            'days'                   => 'required|date',
            'start_date'             => 'required|date',
            'end_date'               => 'required|date', 
            'quarters_id'            => 'required',
            'category_id'            => 'required'
             ];  
        }
        
    }
    public function messages() {
        return [
            'name_research_seedbed.required'  => 'El campo Nombre Completo es obligatorio',
            'description.required'            => 'El campo Descripción es obligatorio',
            'num_document.required'           => 'El campo Número de Documento es obligatorio',
            'days.required'                   => 'El campo Dias es obligatorio',
            'days.date'                       => 'El campo Dias debe ser un dato',
            'start_date.required'             => 'El campo Fecha Inicio es obligatorio',
            'start_date.date'                 => 'El campo Fecha Inicio debe ser un dato',
            'end_date.required'               => 'El campo Fecha Fin es obligatorio',
            'end_date.date'                   => 'El campo Fecha Fin debe ser un dato',
            'quarters_id.required'            => 'El campo Trimestre es obligatorio',
            'category_id.required'            => 'El campo Categoria es obligatorio'
        ];
    }
}
