<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
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
            'title'          => 'required|min:4|unique',
            'description'    => 'required|min:4',
            'file'           => 'required|file|max:2000',
            'user_id'        => 'required'
        ];
        }else{
            // Form create
            return [
            'title'         => 'required|min:4|unique',
            'description'   => 'required',
            'file'          => 'required|file|max:2000',
            'user_id'       => 'required'
            
            ];
        }
    }
    public function messages() {
        return [
            'title.required'         => 'El campo Titulo es obligatorio',
            'title.min'              => 'El campo Titulo debe tener mínimo :min caracteres',
            'title.unique'           => 'El campo Titulo debe ser único',
            'description.required'   => 'El campo Descripción es obligatorio',
            'description.min'        => 'El campo descripción debe tener mínimo :min caracteres',
            'file.required'          => 'El campo archivo es obligatorio',
            'file.file'              => 'El campo archivo debe ser un tipo archivo',
            'file.max'               => 'El campo archivo no debe pasar más de :max kilobites.',
            'start_date.required'    => 'El campo fecha inicio es obligatorio',
            'end_date.required'      => 'El campo fecha fin es obligatorio',
            'user_id.required'       => 'El campo usuario es obligatorio'

        ];
    }
}
