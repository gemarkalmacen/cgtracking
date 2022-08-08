<?php

namespace App\Services\Api\V1\Staff\Users;

use App\Models\User;

class GetUserByUsername
{
    /**
     * @param $email
     * @return mixed
     */
    public function execute($username)
    {
        return User::where('username', $username)->first();
    }
}
