<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Topup extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'top_up';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_number',
        'account_name',
        'amount',
        'transaction_sequence',
        'top_up_date',
        'lcc_top_up_batch_num',
        'cct_type',
        'payroll_type',
        'region',
        'hh_id',
        'period_covered',
        'lbp_top_up_status_report',
        'lbp_reject_reason',
        'upload_history_id',
    ];
}
