<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Granteelist extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

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
        'created_at',
        'updated_at',
        'upload_history_id',
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['lastname'] = strtoupper($value);
    }
}
