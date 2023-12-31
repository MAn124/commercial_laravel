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
            'name' => 'required | max:50 | min:8',
            'email' => 'required | email ',
            'password' => 'required | min:6 | confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please enter username',
            'name.min' => 'Input minimum 8 characters',
            'name.max' => 'Input maximun 50 characters',
            'email.required' => 'Please enter email address',
            'email.email' => 'Invalid email address',
            'password.required' => 'Please enter password',
            'password.min' => 'Please input minimum 6 characters',
            'password.confirmed' => 'Password not matches',
        ];
    }
}
