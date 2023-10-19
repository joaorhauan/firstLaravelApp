<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

        Route::post('/', [UserController::class, "create"]);

        Route::patch('/{id}', [UserController::class, "edit"]);

        Route::delete('/{id}', [UserController::class, "delete"]);

    }
);

Route::prefix('posts')->group(function()
    {
        Route::get('/', [PostController::class, "list"]);

        // Route::get('/{id}', [PostController::class, "listById"]);

        Route::get('/{id}', 'App\Http\Controllers\PostController@listById');


        Route::post('/', [PostController::class, "create"]);

        Route::patch('/{id}', [PostController::class, "edit"]);

        Route::delete('/{id}', [PostController::class, "delete"]);

    }
);
