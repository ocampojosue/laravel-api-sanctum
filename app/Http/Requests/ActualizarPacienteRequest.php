<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
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
        return [
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'ci' => "required|unique:patients,ci,".$this->route('paciente')->id,
            'type_blood' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required'
        ];
    }
}
