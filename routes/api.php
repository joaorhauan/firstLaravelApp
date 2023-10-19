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

Route::get('/users', [UserController::class, "list"]);

Route::get('/users/{id}', [UserController::class, "listById"]);

Route::post('/users','App\Http\Controllers\UserController@create');

Route::patch('/users/{id}','App\Http\Controllers\UserController@edit');
