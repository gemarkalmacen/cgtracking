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

    public function fullname($id)
    {
        return self::select(DB::raw("CONCAT(first_name, ' ', last_name) AS fullname"))->where('user_id', $id)->pluck('fullname');
    }
}
