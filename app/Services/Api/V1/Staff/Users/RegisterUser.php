<?php

namespace App\Services\Api\V1\Staff\Users;

use App\Exceptions\NotFoundException;
use App\Models\User;
use App\Models\UserDetail;
use Spatie\QueryBuilder\QueryBuilder;
use Exception;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterUser
{
    /**
     * Get the City by id
     */
    public function execute($request = null)
    {
        DB::beginTransaction();
        try {
            
            $user = User::where(['username' => $request->username])->get();

            if ( count($user) >= 1) {
                $response = ([
                    'custom_error' => 1
                ]);
                return $response;
            } else {
                $input_user = $request->all();
                $input_user['username'] = $request->username;
                $input_user['email'] = $request->email;
                $input_user['password'] = bcrypt($request->password);
                $input_user['email'] = $request->username . "@cgtracking.com";

                $input_user_details = $request->all();
                $input_user_details['first_name'] = $request->first_name;
                $input_user_details['last_name'] = $request->last_name;
                $input_user_details['middle_name'] = $request->middle_name;
                $input_user_details['mobile'] = $request->mobile;
                $input_user_details['address'] = $request->address;

                $validator = Validator::make($request->all(), [
                    'username' => 'required',
                    'password' => 'required',
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'middle_name' => 'required',
                    // 'mobile' => 'required',
                    // 'address' => 'required',
                ]);

                if($validator->fails()){
                    $response = ([
                        'custom_error' => 3,
                        'error_message' => $validator->errors()->messages()
                    ]);
                    return $response;
                }
                
                $user_data = User::create($input_user);
                $user_data->assignRole(1);
                $input_user_details['user_id'] = $user_data->id;
                $input_user_details['is_active'] = 1;
                
                if($user_data){
                    $user_detail = UserDetail::create($input_user_details);
                    if($user_detail){
                        DB::commit();
                        return array_merge($input_user, $input_user_details);
                    }
                }

                $response = ([
                    'custom_error' => 2
                ]);

                return $response;
            }
        } catch (Exception $ex) {
            DB::rollBack();
            print_r($ex->getMessage());
            throw new NotFoundException('Issue on user registration. Please contact admin for more info.', 404);
        }
    }
}