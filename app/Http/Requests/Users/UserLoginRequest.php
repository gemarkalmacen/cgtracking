<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'remember' => ''
        ];
    }

    /**
     * List of custom messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => __('staff/validations.required'),
            'password.required' => __('staff/validations.required'),
        ];
    }
}
