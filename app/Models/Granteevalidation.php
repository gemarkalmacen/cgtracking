<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Granteevalidation extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'grantee_validations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'hh_id',
        'first_name',
        'last_name',
        'middle_name',
        'ext_name',
        'sex',
        'province_code',
        'municipality_code',
        'barangay_code',
        'set',
        'image',
        'image_additional',
        'created_at',
        'updated_at',
    ];

    public function emvvalidationdetail()
    {
        return $this->belongsTo(Emvvalidationdetails::class, 'grantee_validation_id', 'id');
    }
}
