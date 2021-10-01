<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});
//
Route::get('controle','App\Http\Controllers\API\controleController@index')
;
//
Route::get('controle/{controle}','App\Http\Controllers\API\controleController@show')
;
//
Route::post('controle','App\Http\Controllers\API\controleController@store')
;
//
Route::delete('controle/{controle}','App\Http\Controllers\API\controleController@destroy')
;
//
Route::put('controle/{controle}','App\Http\Controllers\API\controleController@update')
;


