<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Models\Emvdatabasemonitoringdetails;

class Emvvalidations extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'emv_validations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
        'other_card_holder_1',
        'other_card_distribution_status_1',
        'other_card_release_date_1',
        'other_card_number_2',
        'other_card_holder_2',
        'other_card_distribution_status_2',
        'other_card_release_date_2',
        'other_card_number_3',
        'other_card_holder_3',
        'other_card_distribution_status_3',
        'other_card_release_date_3',
        'other_card_number_4',
        'other_card_holder_4',
        'other_card_distribution_status_4',
        'other_card_release_date_4',
        'other_card_number_5',
        'other_card_holder_5',
        'other_card_distribution_status_5',
        'other_card_release_date_5',
        'upload_history_id',
        'record_counter',
        'created_at',
        'updated_at',
        'validated_at',
    ];

    public function emvmonitoringdEmvdatabasemonitoringdetailsetails()
    {
        return $this->hasMany(Emvdatabasemonitoringdetails::class);
    }
}
