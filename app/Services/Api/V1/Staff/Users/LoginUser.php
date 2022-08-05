<?php

namespace App\Services\Api\V1\Staff\Users;

use App\Models\User;
// use App\Services\V1\Users\IsUserActive;
use Illuminate\Support\Facades\Hash;

class LoginUser
{
    /**
     * @var IsUserActive
     */
    // private $isUserActive;

    // public function __construct(IsUserActive $isUserActive)
    // {
    //     $this->isUserActive = $isUserActive;
    // }

    /**
     * @param User $user
     * @param $param
     * @param $isStaff
     * @return false|string
     */
    public function execute(User $user, $param, $isStaff)
    {
        // Get client info
        $type = 'mobile';
        $device = request()->device_name;
        if (empty($device)) {
            $type = 'web';
            $device = request()->ip();
        }

        $latest = $user->tokens()->latest()->take(9)->pluck('id');
        $user->tokens()->whereNotIn('id', $latest)->delete();

        // Create token
        $token = $user->createToken($device);
        $token->accessToken->save();

        return $token->plainTextToken;

    }
}
