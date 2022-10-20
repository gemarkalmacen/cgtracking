<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Syncmonitoring extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    protected $table = 'sync_monitoring';

    protected $fillable = [
        'id',
        'sync_counter',
        'update_counter',
        'pulldata_counter',
        'psgc_counter',
        'user_id',
        'sync_at',
        'created_at',
        'updated_at',
    ];
}
