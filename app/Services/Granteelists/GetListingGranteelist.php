<?php
namespace App\Services\Granteelists;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Granteelist;

class GetListingGranteelist
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {                
        $query = Role::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'name',
                'guard_name'
            ],
            'orderable' => [
                'id',                 
                'name', 
                'guard_name',
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
