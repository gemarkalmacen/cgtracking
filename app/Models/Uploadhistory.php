<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Uploadhistory extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;
    
    protected $table = 'upload_history';

    protected $fillable = [
        'id',
        'file_name',
        'old_file_name',
        'table_source',
        'user_id',
        'created_at',
        'updated_at',
    ];
}
