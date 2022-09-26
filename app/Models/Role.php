<?php

namespace App\Models;

use App\Traits\WithPaginate;
use Ccore\Core\Traits\ExtendedEloquentTrait;

use Spatie\Permission\Models\Role as Roles;

class Role extends Roles
{
    use ExtendedEloquentTrait;    
    use WithPaginate;

    /**
     * Mass assignment column
     */
    protected $fillable = [
        'name',
        'guard_name'
    ];    
}
