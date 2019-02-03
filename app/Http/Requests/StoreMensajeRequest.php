<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMensajeRequest extends FormRequest
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
          'email_destin' => 'required|exists:users,email|email',
          'asunto' => 'required|max:15',
          'mensaje' => 'required|max:100',
          'imagen' => 'nullable|mimes:image/jpeg,image/png'
        ];
    }

    public function messages()
{
    return [
        'email_destin.required' => 'Debes introducir el correo del destinatario',
        'email_destin.email' => 'Debes introducir un correo válido',
        'email_destin.exists' => 'Este correo no existe',
        'asunto.required' => 'No has introducido el :attribute',
        'asunto.max' => 'El :attribute tiene que ser menos de :max caracteres',
        'mensaje.required' => 'No has introducido el :attribute',
        'mensaje.max' => 'El :attribute tiene que ser menos de :max caracteres',
        'imagen.image' => 'No es una imagen',
    ];
}
}
