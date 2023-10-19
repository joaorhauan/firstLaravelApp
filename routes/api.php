<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [TestController::class, "helloWorld"]);

Route::prefix('users')->group(function()
    {
        Route::get('/', [UserController::class, "list"]);

        Route::get('/{id}', [UserController::class, "listById"]);

        Route::post('/','App\Http\Controllers\UserController@create');

        Route::patch('/{id}','App\Http\Controllers\UserController@edit');

        Route::delete('/{id}', [UserController::class, "delete"]);

    }
);
