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

Route::post("/location/{value}","LocationController@search");
//Save New User
Route::post('/register','UserController@register');
//send email verification
Route::get('/sendverification/{username}','UserController@sendVerification');
//verifikiasi akun
Route::get('/register/verify/{token}/{date}/{id}','UserController@verify');
//untuk login
Route::post('/login','UserController@login');
//untuk menampilkan profil
Route::get('/profile','LocationController@getProfile');
//untuk get data toko print
Route::get('/jasaprint','LocationController@getJasaPrint');
