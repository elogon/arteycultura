<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //Form edit
            return [
            'fullname'      => 'required|min:4',
            'document_type' => 'required',
            'num_document'  => 'required|numeric',
            'email'         => 'required|email|unique:users,email',
            'rol_id'        => 'required'

            
            ];
        }else{
            // Form create
             return [
            'fullname'      => 'required|min:4',
            'document_type' => 'required',
            'num_document'  => 'required|numeric',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|confirmed',
            'rol_id'        => 'required'
             ];
        
        }   
    }
    public function messages() {
        return [
            'fullname.required'        => 'El campo Nombre Completo es obligatorio',
            'fullname.min'             => 'El campo Nombre Completo debe tener al menos :min caracteres',
            'document_type.required'   => 'El campo Tipo de Documento es obligatorio',
            'num_document.required'    => 'El campo Número de Documento es obligatorio',
            'num_document.numeric'     => 'El campo Número de Documento debe ser númerico',
            'email.required'           => 'El campo Correo Electrónico es obligatorio',
            'email.email'              => 'El campo Correo Electrónico debe ser una dirección de correo válida',
            'email.unique'             => 'El campo Correo Electrónico ya está en uso',   
            'password.required'        => 'El campo Contraseña es obligatorio',
            'password.confirmed'       => 'El campo Confirmación de Contraseña no coincide',
            'rol_id.required'          => 'El campo rol id es obligatorio'
        ];
    }
} 