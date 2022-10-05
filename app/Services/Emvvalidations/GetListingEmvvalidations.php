<?php
namespace App\Services\Emvvalidations;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Emvvalidations;

class GetListingEmvvalidations
{
    public function execute()
    {
        $query = Emvvalidations::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'id',
                'first_name',
                'last_name',
                'middle_name',
                'ext_name',
                'hh_id',
                'hh_status',
                'province',
                'municipality',
                'barangay',
                'sex',
                'hh_set_group',
                'nma_amount',
                'grantee_card_number',
                'grantee_distribution_status',
                'grantee_card_release_date',
                'other_card_number_1',
                'other_card_distribution_status_1',
                'other_card_release_date_1',
                'other_card_number_2',
                'other_card_distribution_status_2',
                'other_card_release_date_2',
            ],
            'orderable' => [
                'id',
                'first_name',
                'last_name',
                'middle_name',
                'ext_name',
                'hh_id',
                'hh_status',
                'province',
                'municipality',
                'barangay',
                'sex',
                'hh_set_group',
                'nma_amount',
                'grantee_card_number',
                'grantee_distribution_status',
                'grantee_card_release_date',
                'other_card_number_1',
                'other_card_distribution_status_1',
                'other_card_release_date_1',
                'other_card_number_2',
                'other_card_distribution_status_2',
                'other_card_release_date_2',
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
