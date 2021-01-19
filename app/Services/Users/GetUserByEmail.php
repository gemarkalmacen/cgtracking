<?php
namespace App\Services\Users;

use App\Models\User;

class GetUserByEmail 
{
    /**
     * Get user by email
     *
     * @param string $email
     * @return App\Models\User
     */
    public function execute(string $email)
    {
        return User::where('email', $email)->first();
    }
}