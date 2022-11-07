<?php

namespace App\Http\Requests\Api\V1\Staff\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UserChangePasswordRequest extends FormRequest
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
            'user_id' => 'required',
            'current_password' => 'required|string',
            'new_password' => 'required|string|confirmed|min:8',
        ];
    }

    /**
     * @return array
     */

    public function attributes()
    {
        return [
            'user_id' => 'User ID',
            'current_password' => 'Current Password',            
            'new_password' => 'New Password',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => __('staff/validations.required'),
            'current_password.required' => __('staff/validations.required'),
            'current_password.string' => __('staff/validations.string'),
            'new_password.required' => __('staff/validations.required'),                        
            'new_password.confirmed' => __('staff/validations.confirmed'),   
            'new_password.min' => __('staff/validations.min'),   
            'new_password.string' => __('staff/validations.string'),   
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
    
}
