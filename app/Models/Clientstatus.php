<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Clientstatus extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'lib_clientstatus';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'client_status',
        'created_at',
        'updated_at',
    ];
}