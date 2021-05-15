<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', [ApiController::class, 'getAllUsers']);
Route::post('/login', [ApiController::class, 'login']);
Route::post('/getPackagesForUser', [ApiController::class, 'getPackagesForUser']);
Route::post('/getPackageDetails', [ApiController::class, 'getPackageDetails']);
Route::get('/getAllWarehouses', [ApiController::class, 'getAllWarehouses']);
Route::post('/changeStatusOfPackage', [ApiController::class, 'changeStatusOfPackage']);
Route::post('/editPackage', [ApiController::class, 'editPackage']);
Route::post('/reportLostPackage', [ApiController::class, 'reportLostPackage']);
Route::post('/deletePackage', [ApiController::class, 'deletePackage']);
Route::post('/getAllPostmenLocation', [ApiController::class, 'getAllPostmenLocation']);
Route::post('/changePayAndRole', [ApiController::class, 'changePayAndRole']);
