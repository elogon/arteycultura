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
            'start_date'       => 'required|datetime',
            'end_date'         => 'required|datetime',
        ];
        }else{
            // Form create
            return [
            'num_quarter'      => 'required',
        ];
        }
        
    }
    public function messages() {
        return [
            'num_quarter.required'     => 'El campo Trimestre es obligatorio',
            'start_date.required'      => 'El campo fecha inicio es obligatorio',
            'end_date.required'        => 'El campo fecha fin es obligatorio',
   
        ];
    }
}
