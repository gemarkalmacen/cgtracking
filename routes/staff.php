<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Staff main routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'staff'], function() {
    include('config.php');
    include('staff_ajax.php');
});

Route::group(['prefix' => 'staff-panel', 'namespace' => 'Staff'], function () {
    Route::post('/login', 'AuthController@login')->name('staff.auth.login');
    Route::get('/', 'LoginController@index')->name('staff.login');
    Route::group(['middleware' => ['auth:users']], function () {
        // Logout
        Route::get('/logout', 'AuthController@logout')->name('staff.auth.logout');
        // Dashboard
        Route::group(['namespace' => 'Dashboard'], function () {
            Route::get('/dashboard', 'DashboardController@index')->name('staff.dashboard');
        });
    });

    // users
    Route::group(['namespace' => 'Users'], function () {
        Route::resource('users', "UserController", [
            'names' => [
                'index' => "staff.users.index",
                'create' => "staff.users.create",
                'store' => "staff.users.store",
                'show' => "staff.users.show",
                'edit' => "staff.users.edit",
                'update' => "staff.users.update",
                'destroy' => "staff.users.destroy",
            ]
        ]);
    });

    Route::group(['namespace' => 'Roles'], function () {
        Route::resource('roles', "RoleController", [
            'names' => [
                'index' => "staff.roles.index",
                'create' => "staff.roles.create",
                'store' => "staff.roles.store",
                'show' => "staff.roles.show",
                'edit' => "staff.roles.edit",
                'update' => "staff.roles.update",
                'destroy' => "staff.roles.destroy",
            ]
        ]);
    });

    Route::group(['namespace' => 'infimos'], function () {
        Route::resource('infimos', "InfimosController", [
            'names' => [
                'index' => "staff.infimos.index",
                'create' => "staff.infimos.create",
                'store' => "staff.infimos.store",
                'show' => "staff.infimos.show",
                'edit' => "staff.infimos.edit",
                'update' => "staff.infimos.update",
                'destroy' => "staff.infimos.destroy",
            ]
        ]);
    });

});
