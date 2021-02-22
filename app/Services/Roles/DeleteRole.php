<?php
namespace App\Services\Roles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Arr;

class DeleteRole
{
    /**
     * delete role execution     
     *
     * @return object
     */
    public function execute($id)
    {
        $role = Role::find($id);
        return $role->delete();
    }
}
