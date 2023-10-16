<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\pendidikanController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/biodata', [BiodataController::class, 'index']);
Route::post('/biodata', [BiodataController::class, 'store']);
Route::get('/biodata/{nik}', [BiodataController::class, 'show']);
Route::put('/biodata/{nik}', [BiodataController::class, 'update']);
Route::delete('/biodata/{id}', [BiodataController::class, 'destroy']);

Route::post('/pendidikan', [pendidikanController::class, 'store']);
Route::put('/pendidikan/{id}', [pendidikanController::class, 'update']);
Route::delete('/pendidikan/{id}', [pendidikanController::class, 'destroy']);
Route::get('/pendidikan', [pendidikanController::class, 'index']);
