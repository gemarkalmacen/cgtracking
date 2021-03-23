<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Nonemv extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'non_emv';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'row_id',
        'card_number',
        'last_name',
        'first_name',
        'middle_name',
        'naa_address',
        'cif_permanent_address',
        'cif_present_address',
        'nationality_cif_tel_no',
        'entry_number',
        'household_number',
        'birthday',
        'balance_as_of',
        'account_balance',
        'hh_id',
        'region',
        'province',
        'municipality',
        'barangay',
        'hh_first_name',
        'hh_middle_name',
        'hh_last_name',
        'hh_ext_name',
        'hh_birthdate',
        'entry_id',
        'mothers_maiden_name',
        'client_status',
        'payment_mode',
        'hh_set',
        'set_group',
        'hh_card_number',
        'kyc_remarks',
        'account_number_remarks',
        'age_bracket',
        'amount_bracket',
        'nma_remarks',
        'nma_remarks_reason',
        'nma_recommended_action',
        'created_at',
        'updated_at',
    ];
}
