<?php
namespace App\Services\Roles;

use Spatie\Permission\Models\Role;

class GetRoles
{
    /**
     * get list of roles
     * @return Role
     */
    public function execute()
    {
        return Role::where('guard_name', 'users')->get();
    }
}
