<?php

namespace App\Http\Requests\Api\V1\Staff\Emvdatabasemonitoringdetails;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SyncEmvDatabaseMonitoringDetailsRequest extends FormRequest
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
            // 'full_name' => 'required',
        ];
    }

    public function messages()
    {
        return[
            // 'full_name.required' => __('staff/validation.full_name_required'),
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
