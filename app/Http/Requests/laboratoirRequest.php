<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class laboratoirRequest extends FormRequest
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
            'nom'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'tel' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'login' => 'required|string|min:6|max:255',
            'password'  => 'required|string|min:6|max:255|confirmed',
        ];
    }
}
