<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Reasonunclaimed extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'reason_unclaimed';

    protected $fillable = [
        'id',
        'reason',
        'created_at',
        'updated_at',
    ];
}
