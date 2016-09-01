<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Form_nuevo_usuario extends FormRequest
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
            'nombre'=>'required|alpha',
            "ape_pat"=>'required|alpha',
            "ape_mat"=>'required|alpha',
            "username"=>'required|alpha_num',
            "password"=>'required|alpha_num',
            "tipo"=>'required',
        ];
    }
    public function messages(){
        return [
            'ape_pat.required' => 'El campo apellido paterno es obligatorio',
            'ape_pat.alpha' => 'El campo apellido paterno solo puede contener letras',
            'ape_mat.required' => 'El campo apellido materno es obligatorio',
            'ape_mat.alpha' => 'El campo apellido materno solo puede contener letras',
            'username.required' => 'El campo Nombre de Usuario es obligatorio',
            'tipo.required'=>'Seleccione un tipo de Usuario ',

        ];
    }
}
