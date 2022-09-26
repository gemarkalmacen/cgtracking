<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    private $roles = [
        [
            'id' => 1,
            'guard_name' => 'users',
            'name' => 'admin',
            'is_staff' => 1
        ],
        [
            'id' => 2,
            'guard_name' => 'users',
            'name' => 'financial analyst iii',
            'is_staff' => 0
        ],
        [
            'id' => 3,
            'guard_name' => 'users',
            'name' => 'financial analyst ii',
            'is_staff' => 0
        ],
        [
            'id' => 4,
            'guard_name' => 'users',
            'name' => 'financial analyst i',
            'is_staff' => 0
        ],
        [
            'id' => 5,
            'guard_name' => 'users',
            'name' => 'mrb',
            'is_staff' => 0
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('roles')->truncate();
        app()['cache']->forget('spatie.permission.cache');
        $roles = $this->roles;
        foreach ($roles as $key => $data) {
            Role::create($data);
        }
    }
}