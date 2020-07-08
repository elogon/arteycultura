<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingProgramRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_program'      => 'required',
            'cod_program' => 'required',
            
        ];
    }
     public function messages() {
        return [
            'name_program.required'        => 'El campo nombre es obligatorio',
            'cod_program.required'         => 'El campo id programa es obligatorio',
        ];
    }
}
