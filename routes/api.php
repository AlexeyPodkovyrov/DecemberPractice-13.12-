<?php

use App\Http\Controllers\Api\ComputerController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/computers/get', [ComputerController::class, 'index']);

Route::get('/computers/get/{computer}',
    [ComputerController::class, 'show'])
    ->where('computer', '[0-9]+');

