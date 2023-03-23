<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Relationshiptograntee extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'relationship_to_grantee';

    protected $fillable = [
        'id',
        'relationship',
        'created_at',
        'updated_at',
    ];
}
