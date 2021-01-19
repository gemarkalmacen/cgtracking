<?php
namespace App\Services\Users;

use App\Models\User;
use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

class GetListingUsers
{
    /**
     * Get list of users execution
     *
     * @return array
     */
    public function execute()
    {
        

        $query = User::select([
            '*',            
            DB::raw("CONCAT(users_details.last_name,', ',users_details.first_name,' ',  IF(middle_name IS NOT NULL, CONCAT(UPPER(LEFT(middle_name,1)),'.') ,'') ) as fullname"),            
        ])
        ->with(['roles'])
        ->leftJoin('users_details', 'users.id', '=', 'users_details.user_id');

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'first_name', 'last_name', 'middlename', 'mobile', 'email', 'address'
            ],
            'orderable' => [
                'id', 
                [
                    'users_details.last_name',
                    'users_details.first_name',
                    'users_details.middle_name',
                ],
                'users_details.mobile', 
                'users.email',                
                'users_details.is_active',
                'users_details.is_active',
            ]
        ]);
        $records = $result['query']->get();

        return [
            'data' => $records,
            'draw' => intval(request()->draw),
            'recordsTotal' => $result['total'],
            'recordsFiltered' => $result['total']
        ];
    }
}
