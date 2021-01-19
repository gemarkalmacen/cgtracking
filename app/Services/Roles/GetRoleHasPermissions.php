<?php
namespace App\Services\Roles;
use Illuminate\Support\Facades\DB;

class GetRoleHasPermissions
{
    /**
     * get permission by roles
     * @param $int $id role_id
     * @return object
     */
    public function execute(int $id = null)
    {        
        return DB::table("role_has_permissions")
        ->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
        ->all();       
    } 
}