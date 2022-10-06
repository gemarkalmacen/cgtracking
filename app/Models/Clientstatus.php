<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Clientstatus extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'lib_clientstatus';

    protected $fillable = [
        'id',
        'client_status',
        'created_at',
        'updated_at',
    ];
}