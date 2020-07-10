<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            // Form Edit
            return [
                'name'        => 'required|min:4|unique:categories,name,'.$this->id,
                'image'       => 'max:2000',
                'description' => 'required',
            ];
        } else {
            // Form Create
            return [
                'name'        => 'required|min:4|unique:categories',
                'image'       => 'required|image|max:2000',
                'description' => 'required',
            ];
        }
    }

    public function messages() {
        return [
            'name.required'        => 'El campo Nombre es obligatorio',
            'name.min'             => 'El campo Nombre debe tener al menos :min caracteres',
            'name.unique'          => 'El campo Nombre ya está en uso',
            'image.required'       => 'El campo Imagen es obligatorio',
            'image.max'            => 'El Imagen no debe pesar más de :max kilobytes.',
            'description.required' => 'El campo Descripción es obligatorio',
        ];
    }
}
