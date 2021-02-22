<?php
namespace App\Services\Users;

class LogoutUser 
{
    /**
     * Logout user
     *
     * @return void
     */
    public function execute()
    {
        auth('users')->logout();
    }
}