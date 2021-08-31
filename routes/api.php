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


//routes/api.php


Route::post('register',[App\Http\Controllers\passportAuthController::class,'registerUserExample'])->name('api.regist');
Route::post('login',[App\Http\Controllers\passportAuthController::class,'loginUserExample'])->name('api.login');


Route::middleware('auth:api')->group(function(){
     Route::prefix('postes')->group(function () {
            Route::get('/','PostsController@index')->name('postes');
            Route::get('/show/{id}','PostsController@show');
            Route::post('/','PostsController@store');
            Route::get('/group','PostsController@showgroup');
        });

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

