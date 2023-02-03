<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ajax\Emvvalidationdetails\EmvvalidationdetailsController;



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

    Route::group(['prefix' => 'payroll', 'namespace' => 'Payroll'], function () {
        Route::post('listing', 'PayrollController@listing')->name('staff.ajax.payroll.listing');
    });

    Route::group(['prefix' => 'topup', 'namespace' => 'Topup'], function () {
        Route::post('listing', 'TopupController@listing')->name('staff.ajax.topup.listing');
    });
    
    Route::group(['prefix' => 'archivedgranteelists', 'namespace' => 'Archivedgranteelists'], function () {
        Route::post('listing', 'ArchivedgranteelistsController@listing')->name('staff.ajax.archivedgranteelists.listing');
    });

    Route::group(['prefix' => 'overpayment', 'namespace' => 'Overpayment'], function () {
        Route::post('listing', 'OverpaymentController@listing')->name('staff.ajax.overpayment.listing');
    });

    Route::group(['prefix' => 'nonemv', 'namespace' => 'Nonemv'], function () {
        Route::post('listing', 'NonemvController@listing')->name('staff.ajax.nonemv.listing');
    });

    Route::group(['prefix' => 'archivednonemv', 'namespace' => 'Archivednonemv'], function () {
        Route::post('listing', 'ArchivednonemvController@listing')->name('staff.ajax.archivednonemv.listing');
    });

    Route::group(['prefix' => 'uploadhistory', 'namespace' => 'Uploadhistory'], function () {
        Route::post('listing', 'UploadhistoryController@listing')->name('staff.ajax.uploadhistory.listing');
    });

    Route::group(['prefix' => 'inquiry', 'namespace' => 'Inquiry'], function () {
        Route::get('search', 'InquiryController@search')->name('staff.ajax.inquiry.search');
        Route::post('payrollhistory', 'InquiryController@listing')->name('staff.ajax.inquiry.listing');
    });

    Route::group(['prefix' => 'emvvalidations', 'namespace' => 'Emvvalidations'], function () {
        Route::post('listing', 'EmvvalidationController@listing')->name('staff.ajax.emvvalidations.listing');
    });

    Route::group(['prefix' => 'emvvalidationdetails', 'namespace' => 'Emvvalidationdetails'], function () {
        Route::post('listing', 'EmvvalidationdetailsController@listing')->name('staff.ajax.emvvalidationdetails.listing');
        Route::get('search', 'EmvvalidationdetailsController@search')->name('staff.ajax.emvvalidationdetails.search');
        Route::get('exportemv', 'EmvvalidationdetailsController@exportemv')->name('staff.ajax.emvvalidationdetails.exportemv');
        Route::get('/export_user',[EmvvalidationdetailsController::class,'export_user'])->name('export_user');
    });

    // Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
    // Route::post('/import',[UserController::class,'import'])->name('import');
    Route::get('/export_user',[EmvvalidationdetailsController::class,'export_user'])->name('export_user');


});
