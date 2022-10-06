<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Emvdatabase extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'emv_database';

    protected $fillable = [
        'region',
        'province',
        'municipality',
        'barangay',
        'hh_id',
        'lbp_account',
        'run_date',
        'first_name',
        'mid_name',
        'last_name',
        'acct_description',
        'cct_type',
        'lbp_servicing_branch',
        'distribution_status',
        'date_claimed',
        'reason_why_unclaimed',
        'recommended_action',
        'action_taken',
        'date_acted',
        'agreed_distribution_date',
        'batch',
        'entry_id',
        'embossed_name',
        'emv_acct_discre',
        'hh_status',
        'hh_set',
    ];
}
