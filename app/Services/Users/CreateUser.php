<?php
namespace App\Services\Users;

use App\Models\User;
use Illuminate\Support\Arr;

class CreateUser
{
    /**
     * create user execution     
     *
     * @return object
     */
    public function execute($fields)
    {
        $fields['password'] = bcrypt($fields['password']);                
        $fields['role'] = $fields['role'] ?? 'customer';
        $fields['username'] = $fields['email'];
        $user =  User::create(Arr::only($fields, [    
            'username',        
            'email',
            'password'            
        ]));
        $user->details()->create($fields,[
            'first_name',
            'last_name',
            'mobile',
            'address',
            'is_active'
        ]);

        $user->assignRole($fields['role']);
        return $user;
    }
}
