<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Models\Emvvalidationdetails;

class Cardvalidationdetail extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'card_validation_details';

    protected $fillable = [
        'id',
        'card_number_prefilled',
        'card_number_system_generated',
        'card_number_inputted',
        'card_number_series',
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
        'emv_validation_detail_id',
        'created_at',
        'updated_at',
    ];

    public function emvvalidationdetail()
    {
        return $this->hasMany(Emvvalidationdetails::class);
    }
}
