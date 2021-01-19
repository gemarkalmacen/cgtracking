<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffLoginRequest extends FormRequest
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
    
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
            'remember' => ''
        ];
    }

    public function messages()
    {
        return [
            'email.required' => __('staff/validations.required'),
            'password.required' => __('staff/validations.required'),
        ];
    }
}