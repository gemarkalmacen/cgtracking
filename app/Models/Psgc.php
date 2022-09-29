<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Psgc extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'psgc';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'psgc_code',
        'name',
        'correspondence_code',
        'geographic_level',
        'old_names',
        'city_class',
        'urban_rulal',
        'created_at',
        'updated_at',
    ];
}