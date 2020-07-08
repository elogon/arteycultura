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
             ];  
        }
        
    }
    public function messages() {
        return [
            'name_research_seedbed.required'  => 'El campo Nombre Completo es obligatorio',
            'description.required'            => 'El campo Descripción es obligatorio',
             'num_document.required'          => 'El campo Número de Documento es obligatorio',
            'days.required'                   => 'El campo Dias es obligatorio',
            'start_date.required'             => 'El campo fecha inicio es obligatorio',
            'end_date.required'               => 'El campo fecha fin es obligatorio',
        ];
    }
}
