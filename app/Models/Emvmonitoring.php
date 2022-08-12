<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Illuminate\Database\Eloquent\Model;
use Ccore\Core\Traits\ExtendedEloquentTrait;

class Emvmonitoring extends Model
{
    use ExtendedEloquentTrait;
    use WithPaginate;

    /**
     * Database table name
     */
    protected $table = 'emv_database_monitoring';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'hh_id',
        'client_status',
        'address',
        'sex',
        'hh_set_group',
        'current_grantee_card_number',
        'other_card_number_1',
        'other_card_holder_name_1',
        'other_card_number_2',
        'other_card_holder_name_2',
        'other_card_number_3',
        'other_card_holder_name_3',
        'upload_history_id',
        'validated_at',
        'created_at',
        'updated_at',
    ];
}
