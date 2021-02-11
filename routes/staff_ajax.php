<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'ajax', 'namespace' => 'Ajax'], function () {
    Route::group(['prefix' => 'users', 'namespace' => 'Users'], function () {
        Route::post('listing', 'UserController@listing')->name('staff.ajax.users.listing');
    });

    Route::group(['prefix' => 'roles', 'namespace' => 'roles'], function (){
        Route::post('listing', 'RoleController@listing')->name('staff.ajax.roles.listing');
        Route::get('/', 'RoleController@index')->name('staff.ajax.roles');
    });

    Route::group(['prefix' => 'granteelists', 'namespace' => 'Granteelists'], function () {
        Route::post('listing', 'GranteelistController@listing')->name('staff.ajax.granteelists.listing');
    });
});
