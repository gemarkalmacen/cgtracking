<?php
namespace App\Services\Roles;
use Spatie\Permission\Models\Permission;

class GetRolePermissions
{
    /**
     * get permission by roles
     * @param $int $id role_id
     * @return object
     */
    public function execute(int $id = null)
    {
        return Permission::join("role_has_permissions","role_has_permissions.permission_id", "=", "permissions.id")
        ->where("role_has_permissions.role_id",$id)
        ->where("permissions.parent_id", "<>", 0)
        ->get();        
    } 
}