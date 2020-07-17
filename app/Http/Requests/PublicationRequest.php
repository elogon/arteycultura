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
            'title'          => 'required',
            'description'    => 'required',
            'file'           => 'required|max:2000',
            'user_id'        => 'required'
        ];
        }else{
            // Form create
            return [
            'title'         => 'required',
            'description'   => 'required',
            'file'          => 'required|max:2000',
            'user_id'       => 'required'
            
            ];
        }
    }
    public function messages() {
        return [
            'title.required'         => 'El campo Titulo es obligatorio',
            'description.required'   => 'El campo Descripción es obligatorio',
            'file.required'          => 'El campo Archivo es obligatorio', 
            'file.max'               => 'El campo Archivo no debe pesar más de :max kilobytes.',
            'user_id.required'       => 'El campo usuario es obligatorio'

        ];
    }
}
