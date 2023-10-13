<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'name' => 'required | min:6 | max:50 | alpha',
            'description' => 'required | min:6 | max:50 | alpha'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Brand name required',
            'name.min' => 'Brand name minimum 6 characters',
            'name.max' => 'Brand name maximum 50 characters',
            'name.alpha' => 'Special characters are not allowed',
            'description.required' => 'Description required',
            'description.min' => 'Description minimum 6 characters',
            'description.max' => 'Description maximum 50 characters',
            'description.alpha' =>'Special characters are not allowed',
        ];
    }
}
