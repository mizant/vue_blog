<?php

use App\Http\Controllers\Person\DeleteController;
use App\Http\Controllers\Person\ShowController;
use App\Http\Controllers\Person\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\IndexController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([ 'prefix'=>'people'], function () {
    Route::post('/', \App\Http\Controllers\Person\StoreController::class);
    Route::get('/', IndexController::class);
    Route::get('/{person}', ShowController::class);
    Route::patch('/{person}', UpdateController::class);
    Route::delete('/{person}', DeleteController::class);
});
