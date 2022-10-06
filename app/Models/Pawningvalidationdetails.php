<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Pawningvalidationdetails extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'pawning_validation_details';

    protected $fillable = [
        'id',
        'lender_name',
        'lender_address',
        'date_pawned',
        'date_retrieved',
        'loan_amount',
        'status',
        'reason',
        'interest',
        'offense_history',
        'offense_date',
        'remarks',
        'staff_intervention',
        'other_details',
        'created_at',
        'updated_at',
    ];

    public function emvvalidationdetail()
    {
        return $this->belongsTo(Emvvalidationdetails::class, 'pawning_validation_detail_id', 'id');
    }
}
