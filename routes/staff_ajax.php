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
        Route::post('listing', 'GranteelistsController@listing')->name('staff.ajax.granteelists.listing');
    });

    Route::group(['prefix' => 'emvdatabase', 'namespace' => 'Emvdatabase'], function () {
        Route::post('listing', 'EmvdatabaseController@listing')->name('staff.ajax.emvdatabase.listing');
    });

    Route::group(['prefix' => 'emvpayroll', 'namespace' => 'Emvpayroll'], function () {
        Route::post('listing', 'EmvpayrollController@listing')->name('staff.ajax.emvpayroll.listing');
    });

    Route::group(['prefix' => 'archivedgranteelists', 'namespace' => 'Archivedgranteelists'], function () {
        Route::post('listing', 'ArchivedgranteelistsController@listing')->name('staff.ajax.archivedgranteelists.listing');
    });

    Route::group(['prefix' => 'overpayment', 'namespace' => 'Overpayment'], function () {
        Route::post('listing', 'OverpaymentController@listing')->name('staff.ajax.overpayment.listing');
    });
});
