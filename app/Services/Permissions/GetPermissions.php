<?php

namespace App\Services\Permissions;
use Spatie\Permission\Models\Permission;

class GetPermissions
{
    /**
     * Get all permission from role 
     * @return object
     */
    public function execute($id = null)
    {
        $data = [];
        $permissions = Permission::where('parent_id', $id)->get();
        foreach ($permissions as $permission) {
            array_push($data, $permission);
            $subs = Permission::where('parent_id', $permission->id)->get();
            foreach ($subs as $sub) {
                array_push($data, $sub);
            }
        }
        return $data;
    }
}