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
        'grantee_validation_id',
        'contact_no_of',
        'is_grantee',
        'is_minor',
        'relationship_to_grantee',
        'overall_remarks',
        'user_id',
        'nma_validation_id',
        'pawning_validation_detail_id',
        'card_validation_detail_id',
        'emv_validation_id',
        'sync_at',
        'created_at',
        'updated_at',
        'user_updated_id',
        'relationship_to_contact_no'
    ];
    
    public function granteevalidation(){
        return $this->hasOne(Granteevalidation::class);
    }

    public function pawningvalidationdetail()
    {
        return $this->hasOne(Pawningvalidationdetails::class);
    }

    public function cardvalidationdetail()
    {
        return $this->hasOne(Cardvalidationdetail::class);
    }

    public function nmavalidation()
    {
        return $this->hasOne(Nmavalidations::class);
    }

    public function othercardvalidation()
    {
        return $this->hasMany(Othercardvalidation::class, 'emv_validation_detail_id', 'id');
    }

    public function emvvalidations()
    {
        return $this->belongsTo(Emvvalidations::class, "emv_database_monitoring_id");
    }

}
