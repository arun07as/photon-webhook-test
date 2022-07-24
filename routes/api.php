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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/', function () {
    logger()->debug('/', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('create', function () {
    logger()->debug('create', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('close', function () {
    logger()->debug('close', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('join', function () {
    logger()->debug('join', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('leave', function () {
    logger()->debug('leave', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('event', function () {
    logger()->debug('event', request()->all());
    return response()->json(["ResultCode" => 0]);
});
Route::any('gameProperties', function () {
    logger()->debug('gameProperties', request()->all());
    return response()->json(["ResultCode" => 0]);
});
