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

Route::post('/login', 'staff\AuthController@login')->name('staff.auth.login');
Route::get('/', 'staff\LoginController@index')->name('staff.login');

Route::group(['prefix' => 'staff-panel', 'namespace' => 'Staff'], function () {
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

    Route::group(['namespace' => 'Granteelists'], function () {
        Route::resource('granteelists', "GranteelistController", [
            'names' => [
                'index' => "staff.granteelists.index",
                'create' => "staff.granteelists.create",
                'store' => "staff.granteelists.store",
                'show' => "staff.granteelists.show",
                'edit' => "staff.granteelists.edit",
                'update' => "staff.granteelists.update",
                'destroy' => "staff.granteelists.destroy",
            ]
        ]);

        Route::get('granteelistsimport','GranteelistController@import')->name('staff.granteelists.granteelistsimport');
        Route::post('granteelistsload','GranteelistController@load')->name('staff.granteelists.granteelistsload');
    });

    Route::group(['namespace' => 'emvdatabase'], function () {
        Route::resource('emvdatabase', "EmvdatabaseController", [
            'names' => [
                'index' => "staff.emvdatabase.index",
                'create' => "staff.emvdatabase.create",
                'store' => "staff.emvdatabase.store",
                'show' => "staff.emvdatabase.show",
                'edit' => "staff.emvdatabase.edit",
                'update' => "staff.emvdatabase.update",
                'destroy' => "staff.emvdatabase.destroy",
            ]
        ]);

        Route::get('emvdatabaseimport','EmvdatabaseController@import')->name('staff.emvdatabase.emvdatabaseimport');
        Route::post('emvdatabaseload','EmvdatabaseController@load')->name('staff.emvdatabase.emvdatabaseload');
    });

});
