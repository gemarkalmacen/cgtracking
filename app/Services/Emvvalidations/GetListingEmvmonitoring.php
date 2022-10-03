<?php
namespace App\Services\Emvmonitoring;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvmonitoring;
use App\Models\Role;

class GetListingEmvmonitoring
{
    /**
     * Get list of roles execution
     *
     * @return array
     */
    public function execute()
    {
        $query = Emvmonitoring::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'full_name',
                'hh_id',
                'client_status',
                'address',
                'sex',
                'hh_set_group',
                'current_grantee_card_number',
                'other_card_number_1',
                'other_card_holder_name_1',
                'other_card_number_2',
                'other_card_holder_name_2',
                'other_card_number_3',
                'other_card_holder_name_3',
            ],
            'orderable' => [
                'full_name',
                'hh_id',
                'client_status',
                'address',
                'sex',
                'hh_set_group',
                'current_grantee_card_number',
                'other_card_number_1',
                'other_card_holder_name_1',
                'other_card_number_2',
                'other_card_holder_name_2',
                'other_card_number_3',
                'other_card_holder_name_3',
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
