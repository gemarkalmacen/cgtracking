<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'staff', 'namespace' => 'Staff'], function() {
    Route::group(
        [
            'middleware' => ['auth:sanctum']
        ],
        function() {
            Route::group(['namespace' => 'Emvvalidations'], function () {
                Route::get('emvvalidations/pulldata/{emvvalidations}','EmvvalidationController@pulldata');
                Route::get('emvvalidations/updater','EmvvalidationController@updater')->name('emvvalidations.updater');
                Route::apiResource('/emvvalidations', 'EmvvalidationController');
            });
            Route::group(['namespace' => 'Psgc'], function () {
                Route::apiResource('/psgc', 'PsgcController');
            });
            Route::group(['namespace' => 'Emvvalidationdetails'], function () {
                Route::post('emvvalidationdetails/sync','EmvvalidationdetailsController@sync'); //->name('Emvvalidationdetails.sync');
            });
        }
    );

    Route::post('/auth/login', 'AuthController@login');
    Route::post('/auth/register', 'AuthController@register');
});