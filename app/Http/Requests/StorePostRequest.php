<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'photo' => 'required|mimes:jpg,bpm,png',
            'description'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'photo.required'=> 'A imagem é obrigatória',
            'photo.mimes'=>'Extensão não suportada',
            'description.required'=>'A descrição é obrigatória'
        ];
    }
}
