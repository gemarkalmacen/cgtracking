<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        $rules = [];
        $users = $this->route('users') ?? 'NULL';
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'nullable',
            'mobile' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
            'is_active' => 'nullable'
        ];
        switch ($this->method()) {
            case 'PUT':
                $rules['email'] =  'required|unique_translation:users,email,' . $users;
                $rules['password'] = 'nullable';
                break;          
        }
        return $rules;        
    }

    /**
     * list of attributes to be changed on display
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'first_name' => 'Firstname',
            'last_name' => 'Lastname',
            'middle_name' => 'Middlename',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'email' => 'Email address',
            'password' => 'Password',
            'is_active' => 'Active',
            'role' => 'Role',
        ];
    }

    /**
     * list of validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => __('staff/validations.required'),
            'last_name.required' => __('staff/validations.required'),
            'mobile.required' => __('staff/validations.required'),
            'address.required' => __('staff/validations.required'),
            'email.required' => __('staff/validations.required'),
            'email.email' => __('staff/validations.email'),
            'password.required' => __('staff/validations.required'),
            'role.required' => __('staff/validations.required'),
        ];
    }
}
