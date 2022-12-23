<?php

use \Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

Route::group(['prefix' => 'command'], function() {
    // Update permissions
    Route::get('update_permissions', function () {
        Artisan::call('permissions:update');
    });
    // Cache clear
    Route::get('cache-clear', function () {
        Artisan::call('cache:clear');
        echo 'cache:clear';
    });
    // Optimize clear
    Route::get('optimize-clear', function () {
        Artisan::call('optimize:clear');
        echo 'optimize:clear';
    });
    // Config cache
    Route::get('config-cache', function () {
        Artisan::call('config:cache');
        echo 'config:cache';
    });
    // Dump autoload
    Route::get('dump-autoload', function()
    {
        shell_exec('composer dump-autoload');
        echo 'composer dump-autoload complete';
    });
    // Storage link
    Route::get('storage-link', function() {
        Artisan::call('storage:link');
        echo 'public/storage has been linked';
    });
    // Database seeder
    Route::get('db-seed', function () {
        if(isset($_GET['class']) ) {
            Artisan::call('db:seed --class=' . $_GET['class']);
        } else {
            Artisan::call('db:seed');
        }
        echo 'Done seeding';
    });

    Route::get('modify-roles', function () {
        DB::table('roles')->where('id',1)->update(['is_staff' => 1]);
        echo 'Done';
    });

    // migrate
    Route::get('migrate', function () {
        Artisan::call('migrate');
        echo 'Done';
    });    
    
    Route::get('refresh-app', function()
    {
        shell_exec('composer refresh-app');
        echo 'composer refresh-app';
    });

    // to alter incorrect data seeders and other concern
    Route::get('system-deployment-configuration', function()
    {
        $role_is_fa_iii = DB::table('roles')
            ->where('id', 2)
            ->update(['name' => 'financial analyst iii']);

        $role_is_fa_ii = DB::table('roles')
            ->where('id', 3)
            ->update(['name' => 'financial analyst ii']);

        $roles = App\Models\Role::updateOrCreate(
            ['id' => 4],
            [
                'name' => 'financial analyst i',
                'guard_name' => 'users',
                'is_staff' => 0
            ]
        );
        $roles = App\Models\Role::updateOrCreate(
            ['id' => 5],
            [
                'name' => 'mrb',
                'guard_name' => 'users',
                'is_staff' => 0
            ]
        );
    });
});