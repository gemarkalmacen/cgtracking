<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Uploadhistory extends Model
{
    /**
     * Database table name
     */
    protected $table = 'upload_history';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
