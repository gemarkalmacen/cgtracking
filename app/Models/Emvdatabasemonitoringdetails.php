<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Models\Emvmonitoring;

class Emvdatabasemonitoringdetails extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'emv_database_monitoring_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'full_name',
        'hh_id',
        'client_status',
        'address',
        'sex',
        'hh_set_group',
        'assigned_staff',
        'minor_grantee',
        'contact',
        'current_grantee_card_release_date',
        'current_grantee_card_release_place',
        'current_grantee_card_release_by',
        'current_grantee_is_available',
        'current_grantee_reason',
        'current_grantee_card_number',
        'other_card_number_1',
        'other_card_holder_name_1',
        'other_card_number_2',
        'other_card_holder_name_2',
        'other_card_number_3',
        'other_card_holder_name_3',
        'other_card_is_available',
        'other_card_reason',
        'nma_amount',
        'nma_date_claimed',
        'nma_reason',
        'nma_remarks',
        'pawn_name_of_lender',
        'pawn_date',
        'pawn_retrieved_date',
        'pawn_status',
        'pawn_reason',
        'pawn_offense_history',
        'pawn_offense_date',
        'pawn_remarks',
        'pawn_intervention_staff',
        'pawn_other_details',
        'accomplish_e_signature',
        'informant_e_signature',
        'attested_by_e_signature',
        'attested_by_full_name',
        'other_card_number_series_1',
        'other_card_number_series_2',
        'other_card_number_series_3',
        'emv_database_monitoring_id',
        'current_grantee_card_number_series',
        'current_cash_card_picture',
        'beneficiary_picture',
        'informant_full_name',
        'accomplish_by_full_name',
        'user_id',
        'sync_at',
        'created_at',
        'updated_at',
        'other_card_is_available_2',
        'other_card_is_available_3',
        'other_card_reason_2',
        'other_card_reason_3',
        'pawn_loaned_amount',
        'pawn_lender_address',
        'pawn_interest'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['filter'] ?? null, function ($query, $filters) {
            $query->where(function ($query) use ($filters) {
                $query  ->where('hh_id', 'like', '%'.$filters.'%')
                        ->orWhere('full_name', 'like', '%'.$filters.'%')
                        // ->orWhere('address', 'like', '%'.$filters.'%')
                        // ->orWhere('current_grantee_card_number', 'like', '%'.$filters.'%');
                        ;
            });
        });
    }

    public function emvmonitoring()
    {
        return $this->belongsTo(Emvmonitoring::class, "emv_database_monitoring_id");
    }
}
