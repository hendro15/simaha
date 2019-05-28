<?php

use Illuminate\Http\Request;

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
Route::get('/mahasiswa/all', 'MahasiswaController@index');
Route::post('mahasiswa', 'MahasiswaController@show');
Route::post('mahasiswa/add', 'MahasiswaController@create');
Route::put('mahasiswa/update/{id}', 'MahasiswaController@update');