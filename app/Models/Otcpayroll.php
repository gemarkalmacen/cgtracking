<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Otcpayroll extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'otc_payroll';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'period',
        'year',
        'payroll_type',
        'region',
        'province',
        'municipality',
        'barangay',
        'address_psgc',
        'lastname',
        'firstname',
        'middlename',
        'household_id',
        'hhset',
        'mop',
        'card',
        'payroll_date',
        'educ_dc_elem',
        'educ_jr_hs',
        'educ_sr_hs',
        'educ_total_hs',
        'total_educ',
        'health',
        'rice',
        'total_amount',
        'set',
        'set_group',
    ];
}
