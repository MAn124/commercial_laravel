<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=> 'required | min:6 | max:50 | alpha',
            'email'=> 'required | email',
            'password'=> 'required | min:6 | max:50 | alpha_dash:1',
            'confirmpassword'=> 'required |same:password ',
            'phone'=> 'required | min:12 | max:12 | numberic',
            'address'=> 'required | max:50 | alpha_dash:0'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter user name',
            'name.min' => 'Please enter at least 6 characters',
            'name.min' => 'Maximum 50 characters',
            'name.alpha' => 'Special characters are not allowed',
            'email.required' => 'Please enter your email',
            'email.email' => 'Please enter your email',
            'password.required' => 'Please enter your password',
            'password.min' => 'Please enter at least 6 characters',
            'password.max' => 'Maximum 50 characters',
            'password.alpha_dash' => 'Password requires at least 1 special character',
            'confirmpassword.required' => 'Please enter confirm password',
            'confirmpassword.required' => 'confirm password not match',
            'phone.required' => 'Please enter your phone number',
            'phone.min' => 'At least 12 characters required',
            'phone.max' => 'At least 12 characters required',
            'phone.number' => 'Phone number only',
            'address.required' => 'Please enter your address',
            'address.max' => 'Maximum 50 characters',
            'address.alpha_dash' => 'Special characters are not allowed',
        ];
    }
}

