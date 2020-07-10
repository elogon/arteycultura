<?php

namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\CulturalEventRequest;

class CulturalEventRequest extends FormRequest
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
            'name'          => 'required',
            'description'   => 'required',
            'file'          => 'max:2000',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'category_id'   => 'required'
        
        ];
        }else{
            // Form create
            return [
            'name'          => 'required',
            'description'   => 'required',
            'file'          => 'max:2000',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'category_id'   => 'required'
            ];
        }
    }
    public function messages() {
        return [
            'name.required'         => 'El campo Nombre es obligatorio',
            'description.required'  => 'El campo Descripción es obligatorio',
            'file.required'         => 'El campo Archivo es obligatorio',
            'file.max'              => 'El campo Archivo no debe pasar más de :max kilobites.',
            'start_date.required'   => 'El campo Fecha Inicio es obligatorio',
            'start_date.date'       => 'El campo Fecha Inicio debe ser un dato',
            'end_date.required'     => 'El campo Fecha Fin es obligatorio',
            'end_date.date'         => 'El campo Fecha Fin debe ser un dato',
            'category_id'           => 'El campo Categoria es obligatorio'
        ];
    }
}
