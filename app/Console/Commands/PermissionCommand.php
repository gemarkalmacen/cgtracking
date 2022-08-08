<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name  = 'permissions:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update admin permissions';

    /**
     * List of modules
     *
     * @var string
     */
    protected $modules = [
        'users',
        'roles',
        'granteelists',
        'emvdatabase',
        'payroll',
        'topup',
        'archivedgranteelists',
        'overpayment',
        'nonemv',
        'archivednonemv',
        'uploadhistory',
        'inquiry',
        'emvmonitoring',
    ];

    /**
     * List of actions
     *
     * @var string
     */
    protected $actions = [
        'list',
        'create',
        'edit',
        'delete',
        'view',
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->prepare();
        $this->core();
        $this->assign();
        $this->info('Permissions updated.');
    }

    private function prepare()
    {
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('cache:forget spatie.permission.cache');
        DB::table('permissions')->delete();
    }

    private function core()
    {
        $modules = $this->modules;
        $actions = $this->actions;
        foreach ($modules as $key => $module) {
            $name = str_replace(' ', '-', $module);
            $slug = str_replace(' ', '.', $module);
            $base = [
                'parent_id' => 0,
                'name' => $name,
                'guard_name' => 'users',
                'slug' => $slug,
                'description' =>
                'Access '.$name .' Module'
            ];
            // get base id after insert
            $id = DB::table('permissions')->insertGetId($base, 'id');

            // structure permissions
            $permissions = [];
            foreach ($actions as $key => $action) {
                $permissions[] = [
                    'parent_id' => $id,
                    'name' => $name . '-' . str_replace(' ', '.', $action),
                    'guard_name' => $base['guard_name'],
                    'slug' => $slug . '.' . str_replace(' ', '.', $action),
                    'description' => 'Access ' . ucwords($module . ' '. $action) . ' Module'
                ];
            }
            $this->create($permissions);
        }
    }

    private function create($permissions)
    {
        foreach ($permissions as $permission) {
            Permission::create([
                'parent_id' => $permission['parent_id'],
                'name' => $permission['name'],
                'guard_name' => $permission['guard_name'],
                'slug' => $permission['slug'],
                'description' => $permission['description'],
            ]);
        }
    }

    private function assign()
    {
        $role = Role::where('name', 'admin')->first();
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user = User::where('email', 'admin@admin.com')->first();
        $user->assignRole($role->id);
    }
}
