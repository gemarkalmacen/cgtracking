<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Psgc extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'psgc';

    protected $fillable = [
        'id',
        'name_new',
        'name_old',
        'code',
        'geographic_level',
        'created_at',
        'updated_at',
    ];
}
