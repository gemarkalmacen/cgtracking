<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Othercardvalidation extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'other_card_validations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'card_holder_name',
        'card_number_system_generated',
        'card_number_inputted',
        'card_number_series',
        'card_image',
        'distribution_status',
        'release_date',
        'release_by',
        'release_place',
        'card_physically_presented',
        'card_pin_is_attached',
        'reason_not_presented',
        'reason_unclaimed',
        'card_replacement_request',
        'card_replacement_submitted_details',
        'pawning_remarks',
        'emv_validation_detail_id',
        'created_at',
        'updated_at',
    ];

    public function emvvalidationdetail()
    {
        return $this->belongsTo(Emvvalidationdetails::class);
    }
}
