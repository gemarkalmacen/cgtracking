<?php
namespace App\Services\Users;

use App\Models\User;
use Illuminate\Support\Arr;

class UpdateUser
{
    /**
     * update user
     * @param $id integer
     * @param $fields column fields
     * @return model
     */
    public function execute(int $id, array $fields)
    {        
        $data = Arr::only($fields, [
            'email',
            'password'
        ]);
        if( $fields['password'] != '' ) {
            $data['password'] = bcrypt($fields['password']);
        }
        $user =  User::find($id);
        $response = $user->update($data);
        $user->details()->update(Arr::only($fields,[
            'first_name',
            'last_name',
            'mobile',
            'address',
            'is_active'
        ]));
        $user->syncRoles($fields['role']);
        return $response;
    }
}
