<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Overpayment extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'overpayment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'row_no',
        'run_date',
        'lbp_account',
        'hh_id',
        'lastname',
        'firstname',
        'extension',
        'middlename',
        'filename',
        'ftp_request_filename',
        'date_claimed',
        'account_status',
        'account_balance',
        'date_acted_by_lbp',
        'ref_no',
        'account_status_remarks',
        'mc_no',
        'ref_matching',
        'matching_status',
        'distribution_status',
        'region',
        'status',
        'mop',
        'account number(db)',
        'old_account',
        'hh_status',
        'bal',
        'co_remarks',
        'upload_history_id',
        'created_at',
        'updated_at',

    ];
}
