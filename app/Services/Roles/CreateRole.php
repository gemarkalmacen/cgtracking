<?php
namespace App\Services\Roles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Arr;

class CreateRole
{
    /**
     * create role execution     
     *
     * @return object
     */
    public function execute($fields)
    {                          
        $role = Role::create([
            'name' => $fields['name'],
            'guard_name' => 'users',
        ]);  
        $role->syncPermissions($fields['permission']);   
        return $role;
    }
}
