<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addUser extends FormRequest
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
            'address' => 'required|min:10',
            'age' => 'required|min:2|max:2|numeric',
            'contact' => 'required|min:10|numeric'
        ];
    }

    public function messages()
    {
        return [
            'address.required' => ':attribute is not Filled and is compulsury.',
            'address.min' => ':attribute should be of 10 characters.',
            'required' => ':attribute should be filled.',
            'numeric' => ':attribute should be in Numeric'
        ];
    }
}
