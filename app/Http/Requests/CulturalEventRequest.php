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
            'file'          => 'max:1000',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'stand_out'     => 'required',
        ];
        }else{
            // Form create
            return [
            'name'          => 'required',
            'description'   => 'required',
            'file'          => 'max:1000',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'stand_out'     => 'required',
        ];
        }
    }
    public function messages() {
        return [
            'name.required'         => 'El campo Nombre Completo es obligatorio',
            'description.required'  => 'El campo Descripción es obligatorio',
            'file.required'         => 'El campo archivo es obligatorio',
            'file.max'              => 'El campo archivo no debe pasar más de :max kilobites.',
            'start_date.required'   => 'El campo fecha inicio es obligatorio',
            'end_date.required'     => 'El campo fecha fin es obligatorio',
            'stand_out.required'    => 'El campo destacados es obligatorio',
        ];
    }
}
