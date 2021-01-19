<?php
namespace App\Services\Users;

use App\Models\User;
use Illuminate\Support\Arr;

class DeleteUser
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($id)
    {
        $user = User::find($id);
        $roles = $user->getRoleNames();
        foreach($roles as $role){
          $user->removeRole($role);
        }
        $user->details->delete();
        $user = $user->delete();
        return $user;
    }
}
