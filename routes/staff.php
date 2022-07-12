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
Route::get('/login_isso', 'staff\AuthController@login_isso')->name('staff.auth.login_isso');
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
            ]
        ]);

        Route::get('granteelistsimport','GranteelistController@import')->name('staff.granteelists.granteelistsimport');
        Route::post('granteelistsload','GranteelistController@load')->name('staff.granteelists.granteelistsload');
    });

    Route::group(['namespace' => 'Emvdatabase'], function () {
        Route::resource('emvdatabase', "EmvdatabaseController", [
            'names' => [
                'index' => "staff.emvdatabase.index",
            ]
        ]);

        Route::get('emvdatabaseimport','EmvdatabaseController@import')->name('staff.emvdatabase.emvdatabaseimport');
        Route::post('emvdatabaseload','EmvdatabaseController@load')->name('staff.emvdatabase.emvdatabaseload');
    });
    
    Route::group(['namespace' => 'Payroll'], function () {
        Route::resource('payroll', "PayrollController", [
            'names' => [
                'index' => "staff.payroll.index",
            ]
        ]);

        Route::get('payrollimport','PayrollController@import')->name('staff.payroll.payrollimport');
        Route::post('payrollload','PayrollController@load')->name('staff.payroll.payrollload');
    });
    Route::group(['namespace' => 'Topup'], function () {
        Route::resource('topup', "TopupController", [
            'names' => [
                'index' => "staff.topup.index",
            ]
        ]);

        Route::get('topupimport','TopupController@import')->name('staff.topup.topupimport');
        Route::post('topupload','TopupController@load')->name('staff.topup.topupload');
    });

    Route::group(['namespace' => 'Overpayment'], function () {
        Route::resource('overpayment', "OverpaymentController", [
            'names' => [
                'index' => "staff.overpayment.index",
            ]
        ]);

        Route::get('overpaymentimport','OverpaymentController@import')->name('staff.overpayment.overpaymentimport');
        Route::post('overpaymentload','OverpaymentController@load')->name('staff.overpayment.overpaymentload');
    });

    Route::group(['namespace' => 'Nonemv'], function () {
        Route::resource('nonemv', "NonemvController", [
            'names' => [
                'index' => "staff.nonemv.index",
            ]
        ]);

        Route::get('nonemvimport','NonemvController@import')->name('staff.nonemv.nonemvimport');
        Route::post('nonemvload','NonemvController@load')->name('staff.nonemv.nonemvload');
    });

    Route::group(['namespace' => 'Archivedgranteelists'], function () {
        Route::resource('archivedgranteelists', "ArchivedgranteelistsController", [
            'names' => [
                'index' => "staff.archivedgranteelists.index",
            ]
        ]);
    });

    Route::group(['namespace' => 'Archivednonemv'], function () {
        Route::resource('archivednonemv', "ArchivednonemvController", [
            'names' => [
                'index' => "staff.archivednonemv.index",
            ]
        ]);
    });

    Route::group(['namespace' => 'Uploadhistory'], function () {
        Route::resource('uploadhistory', "UploadhistoryController", [
            'names' => [
                'index' => "staff.uploadhistory.index",
            ]
        ]);
        Route::post('uploadhistoryload','UploadhistoryController@load')->name('staff.uploadhistory.uploadhistoryload');
    });

    Route::group(['namespace' => 'Inquiry'], function () {
        Route::resource('inquiry', "InquiryController", [
            'names' => [
                'index' => "staff.inquiry.index",
            ]
        ]);
    });

});
