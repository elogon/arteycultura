<?php

namespace App\Http\Requests; 

use Illuminate\Foundation\Http\FormRequest;

class QuartersRequest extends FormRequest
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
            'num_quarter'      => 'required',
            'start_date'       => 'required|date',
            'end_date'         => 'required|date'
        ];
        }else{
            // Form create
            return [
            'num_quarter'      => 'required',
            'start_date'       => 'required|date',
            'end_date'         => 'required|date'
            ];
        }
        
    }
    public function messages() {
        return [
            'num_quarter.required'     => 'El campo Trimestre es obligatorio',
            'start_date.required'      => 'El campo fecha inicio es obligatorio',
            'start_date.date'          => 'El campo Fecha Inicio debe ser un dato',
            'end_date.required'        => 'El campo fecha fin es obligatorio'
            'end_date.date'            => 'El campo Fecha Fin debe ser un dato',
   
        ];
    }
}
