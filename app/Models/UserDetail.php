<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UserDetail extends Model
{

    protected $table = 'users_details';

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
