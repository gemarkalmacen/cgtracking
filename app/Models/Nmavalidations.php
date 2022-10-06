<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Models\Emvvalidationdetails;

class Nmavalidations extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'nma_validations';

    protected $fillable = [
        'id',
        'amount',
        'date_claimed',
        'reason',
        'remarks',
        'created_at',
        'updated_at',
    ];

    public function emvvalidationdetail()
    {
        return $this->belongsTo(Emvvalidationdetails::class, 'id');
    }
}
