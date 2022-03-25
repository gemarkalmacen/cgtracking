<?php

namespace App\Http\Requests\Topup;

use Illuminate\Foundation\Http\FormRequest;

class ImportRequest extends FormRequest
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
            // 'file' => 'required|max:2048||mimes:xlsx,xls',
            'file' => 'required|mimes:csv,txt',
        ];
    }

    /**
     * list of attributes to be changed on display
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'file' => 'File',            
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
