<?php
namespace App\Services\Granteelists;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Granteelist;
use App\Models\Role;

class GetListingGranteelist
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {             
        // $select = [
        //     'id',
        //     'name',
        // ];
        $query = Granteelist::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'region',
                'province',
                'municipality',
                'barangay',
                'purok',
                'address',
                'hh_id',
                'entryid',
                'lastname',
                'firstname',
                'middlename',
                'extensionname',
                'birthday',
                'age',
                'clientstatus',
                'member_status',
                'registrationstatus',
                'sex',
                'relationship_to_hh_head',
                'ipaffiliation',
                'hh_set',
                'group',
                'mothers_maiden',
                'date_of_enumeration',
                'lbp_account_number',
                'mode_of_payment',
                'date_tagged_hhstatus',
                'tagged_by',
                'date_registered',
            ],
            'orderable' => [
                'region',
                'province',
                'municipality',
                'barangay',
                'purok',
                'address',
                'hh_id',
                'entryid',
                'lastname',
                'firstname',
                'middlename',
                'extensionname',
                'birthday',
                'age',
                'clientstatus',
                'member_status',
                'registrationstatus',
                'sex',
                'relationship_to_hh_head',
                'ipaffiliation',
                'hh_set',
                'group',
                'mothers_maiden',
                'date_of_enumeration',
                'lbp_account_number',
                'mode_of_payment',
                'date_tagged_hhstatus',
                'tagged_by',
                'date_registered',
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
