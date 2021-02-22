<?php

namespace App\Http\Requests\Roles;

use Illuminate\Foundation\Http\FormRequest;

class RoleStoreRequest extends FormRequest
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
        $roles = $this->route('roles') ?? 'NULL';
        $rules =  [                    
            'name' => 'required|unique_translation:roles,name',
            'permission' => 'nullable',
        ];
        switch ($this->method()) {
            case 'PUT':
                $rules['name'] =  'required|unique_translation:roles,name,' . $roles;
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
           
        ];
    }
}
