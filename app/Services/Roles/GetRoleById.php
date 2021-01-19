<?php
namespace App\Services\Roles;

use Spatie\Permission\Models\Role;

class GetRoleById
{
    /**
     * Get role by id
     *
     * @param string $id
     * @return Spatie\Permission\Models\Role
     */
    public function execute(int $id)
    {
        return Role::find($id);
    }
}
