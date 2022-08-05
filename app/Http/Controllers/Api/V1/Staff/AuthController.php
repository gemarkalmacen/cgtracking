<?php

namespace App\Http\Controllers\Api\V1\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

use App\Services\V1\Users\VerifyPassword;
use App\Services\V1\Staff\Users\LoginUser;
// use App\Services\V1\Users\IsUserActive;
use App\Services\V1\Staff\Users\GetUserByEmail;
use App\Http\Requests\V1\Staff\Auth\UserLoginRequest;

class AuthController extends Controller
{
    public function login(){
        dd("login");
    }
}