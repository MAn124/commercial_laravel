<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => 'required | max:50 | min:8',
            'email' => 'required | email',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter username',
            'name.min' => 'Input minimum 8 characters',
        ];
    }
}
