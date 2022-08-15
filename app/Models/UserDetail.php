<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /**
     * Database table name
     */
    protected $table = 'users_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'middle_name',
        'mobile',
        'address',        
        'is_active',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
