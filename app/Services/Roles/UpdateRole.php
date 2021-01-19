<?php
namespace App\Services\Roles;

use Spatie\Permission\Models\Role;

class UpdateRole
{
    /**
     * update role
     * @param $id integer
     * @param $fields column fields
     * @return model
     */
    public function execute(int $id, array $fields)
    {                     
        $model = Role::find($id);       
        $result = $model->update([
            'name' => $fields['name'],
            'guard_name' => 'users',
        ]);
        $model->syncPermissions($fields['permission']);   
        return $result;
    }
}
