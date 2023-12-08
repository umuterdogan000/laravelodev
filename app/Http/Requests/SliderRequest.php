<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     *@return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     *  Determine if the user is authorized to make this request.
     */



public function rules(): array
{
    return[
        'name'=>'required|string|min:3',
        'content'=>'required',
    ];
}

public function messages(): array
{
    return[
        'name.required' => 'Başlık Zorunlu',
        'name.string' => 'Başlık Karakterlerden Oluşmalı',
        'name.min' => 'Başlık Minimum 3 Karakterden Oluşmalıdır',

        'content.required' => 'İçerik Zorunlu',
    ];
}

}

