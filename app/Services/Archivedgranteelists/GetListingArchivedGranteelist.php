<?php
namespace App\Services\Archivedgranteelists;

use Ccore\Core\Datatable;
use Illuminate\Support\Facades\DB;

use App\Models\Archivegranteelist;

class GetListingArchivedGranteelist
{
    public function execute()
    {
        $query = Archivegranteelist::select(['*']);

        $result = Datatable::of($query, request(), [
            'searchable' => [
                'id',
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
                'created_at',
                'updated_at',
                'upload_history_id',
                'archive_date',
                'user_id',
            ],
            'orderable' => [
                'id',
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
                'created_at',
                'updated_at',
                'upload_history_id',
                'archive_date',
                'user_id',
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
