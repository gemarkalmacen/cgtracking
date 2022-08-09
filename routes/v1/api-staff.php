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
            Route::group(['namespace' => 'Granteelists'], function () {
                Route::apiResource('/granteelists', 'GranteelistController');
            });
            Route::group(['namespace' => 'Emvdatabasemonitoring'], function () {
                Route::apiResource('/emvdatabasemonitoring', 'EmvdatabasemonitoringController');
                Route::get('emvdatabasemonitoring/pulldata/{emvdatabasemonitoring}','EmvdatabasemonitoringController@pulldata');
            });
        }
    );

    Route::post('/auth/login', 'AuthController@login');
    Route::post('/auth/register', 'AuthController@register');
});