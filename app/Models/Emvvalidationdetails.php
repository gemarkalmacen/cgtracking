<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Emvvalidationdetails extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'emv_validation_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'hh_status',
        'contact_no',
        'assigned_staff',
        'representative_name',
        'grantee_id',
        'is_grantee',
        'is_minor',
        'relationship_to_grantee',
        'user_id',
        'sync_at',
        'created_at',
        'updated_at',
        'contact_no_of',
        'pawning_validation_detail_id',
        'nma_validation_id',
    ];

    public function emvvalidations()
    {
        // return $this->belongsTo(Emvvalidations::class, "emv_database_monitoring_id");
    }

    public function nmavalidation()
    {
        return $this->hasMany(Nmavalidations::class, 'nma_validation_id');
    }

    public function pawningvalidationdetail()
    {
        return $this->hasMany(Pawningvalidationdetails::class, 'nma_validation_id');
    }
}
