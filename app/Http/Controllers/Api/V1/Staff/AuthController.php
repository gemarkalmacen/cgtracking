<?php

namespace App\Http\Controllers\Api\V1\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Services\Api\V1\Staff\Users\VerifyPassword;
use App\Services\Api\V1\Staff\Users\LoginUser;
// use App\Services\V1\Users\IsUserActive;
use App\Services\Api\V1\Staff\Users\GetUserByUsername;
use App\Http\Requests\Api\V1\Staff\Auth\UserLoginRequest;
use App\Http\Requests\Api\V1\Staff\Auth\UserRegistrationRequest;
use App\Services\Api\V1\Staff\Users\RegisterUser;

class AuthController extends Controller
{
    public function login(
        UserLoginRequest $userLoginRequest, 
        VerifyPassword $verifyPassword, 
        LoginUser $loginUser,
        GetUserByUsername $getUserByUsername
        ){
        $user = $getUserByUsername->execute($userLoginRequest->username);

        if(!$user) {
            return response()->json([
                'status' => __('messages.error'),
                'description' => __('messages.unauthorized'),
                'errors' => [
                    [
                        'code' => 5003,
                        'message' => __('staff/validations.credentials_invalid')
                    ]
                ]
            ], 401);
        }

        $password = $verifyPassword->execute($user, $userLoginRequest->input('password'));

        if(!$password) {
            return $this->formatValidation(401, __('messages.unauthorized'), [
                [
                    'code' => 5003,
                    'message' => __('staff/validations.credentials_invalid')
                ]
            ]);
        }

        $token = $loginUser->execute($user, $userLoginRequest->only(['username', 'password']), true);
        
        if(!$token) {
            return $this->formatValidation(401, __('messages.unauthorized'), [
                [
                    'code' => 5003,
                    'message' => __('staff/validations.credentials_invalid')
                ]
            ]);
        }
        
        // $role = $user->roles()->first();

        $fullname = $user->details->first_name . " " . substr($user->details->middle_name, 0, 1) . "." . " " . $user->details->last_name;

        return response()->json([
            'status' => __('messages.status_success'),
            'description' => __('messages.ok'),
            'token' => $token,
            'data' => [
                'id' => $user->id,
                'email' => $user->email,
                'mobile' => $user->mobile,
                'name' => $fullname,
                'username' => $user->username,
                // 'user_details' => [
                //     'full_name' => $fullname,
                // ],
                // 'roles' => [
                //     'id' => $role->id,
                //     'name' => $role->name,
                // ],
                // 'user_settings' => [
                //     'languages' => isset($user->setting->language) ? [
                //         'id' => $user->setting->language->id ,
                //         'code' => $user->setting->language->code
                //     ] : []
                // ],
                'created_at' => $user->created_at->format('Y-m-d H:i:s'),
                'updated_at' => $user->updated_at->format('Y-m-d H:i:s'),
                'deleted_at' => $user->deleted_at ? $user->deleted_at->format('Y-m-d H:i:s') : '',
            ]
        ]);
    }

    public function register(UserRegistrationRequest $request, RegisterUser $registerUser)
    {
        $response = $registerUser->execute($request);

        if(isset($response['custom_error']))
        {
            if($response['custom_error'] == 1){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => "Username already exist!",
                ],404);
            }

            if($response['custom_error'] == 2){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => "Failed to register user!",
                ],404);
            }

            if($response['custom_error'] == 3){
                return response()->json([                
                    'status' => __('messages.error'),
                    'description' => $response['error_message'],
                ],404);
            }
        }

        return response()->json([                
            'status' => __('messages.success'),
            'description' => __('staff/notifications.users_created_successfully'),
            'data' => $response
        ],200);
    }

}