<?php
namespace App\Services\Uploadhistory;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Uploadhistory;
use App\Models\Role;

class GetListingUploadhistory
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Uploadhistory::join('users_details', 'upload_history.user_id', '=', 'users_details.user_id')
        ->join('users', 'upload_history.user_id', '=', 'users.id')
        ->select(['upload_history.*','users.username',DB::raw(' DATE_FORMAT(upload_history.created_at, "%Y-%m-%d-%h:%i %p") AS created_date'),DB::raw('CONCAT(users_details.first_name," - ",users_details.last_name) AS fullname')
        
        ]);

 
        $result = Datatable::of($query, request(), [
            'searchable' => [
                'file_name',
                'table_source',
                'old_file_name',
                'created_at',
                'user_id',
                'fullname',
            ],
            'orderable' => [
                'file_name',
                'table_source',
                'old_file_name',
                'created_at',
                'user_id',
                'fullname',
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
