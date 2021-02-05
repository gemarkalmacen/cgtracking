<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Granteelist extends Model
{
    /**
     * Database table name
     */
    protected $table = 'grantee_lists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    ];
}
