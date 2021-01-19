<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\UserDetail;
use Ccore\Core\Traits\ExtendedEloquentTrait;
use App\Traits\WithPaginate;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles, WithPaginate;
    use ExtendedEloquentTrait;

    protected $guard = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [     
        'username',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * @var string[]
     */
    protected $appends = ['is_staff'];

    /**
     * Login responses
     */
    const LOGIN_SUCCESS = 1;
    const LOGIN_BAD_CREDENTIALS = 2;
    const LOGIN_INACTIVE = 3;

    /**
     * Define relationship to user details
     */
    public function details(): HasOne
    {
        return $this->hasOne(UserDetail::class);
    }

    /**
     * Get non staff user
     *
     * @param $query model
     *
     * @return array collection of not staff user
     */
    public function scopeNotStaff($query)
    {
        return $query->where('is_staff', '0');
    }

    /**
     * Check user staff
     *
     * @return int
     */
    public function getIsStaffAttribute()
    {
        return $this->roles()->where('is_staff', 1)->count();
    }
}
