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
        'upload_details',
        'table_source',
        'created_at',
        'updated_at',
    ];
}
