<?php
namespace App\Services\Users;

use App\Models\User;

class GetUserById
{
    /**
     * Get user by id
     *
     * @param string $id
     * @return App\Models\User
     */
    public function execute(int $id)
    {
        return User::find($id);
    }
}
