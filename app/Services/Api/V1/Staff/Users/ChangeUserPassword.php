<?php

namespace App\Services\Api\V1\Staff\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

// use Illuminate\Http\Exceptions\HttpResponseException;

class ChangeUserPassword
{
    public function execute($fields)
    {
        $user = User::find($fields->user_id);

        if (!Hash::check($fields['current_password'], $user->password)) 
        {
            // throw new HttpResponseException(response()->json(['error' => 'Current Password is Invalid.'], 422));

            return ([
                'custom_error' => 1,
                'error_message' => 'Current Password is Invalid.'
            ]);
        }

        if (strcmp($fields['current_password'], $fields['new_password']) == 0) 
        {
            return ([
                'custom_error' => 2,
                'error_message' => 'New Password cannot be same as your current password.'
            ]);
        }

        $user->password =  Hash::make($fields['new_password']);

        return $user->save();;
    }
}
