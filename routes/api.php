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
Route::post('/registerCustomer', [ApiController::class, 'registerCustomer']);
Route::post('/registerAdmin', [ApiController::class, 'registerAdmin']);
Route::post('/registerWarehouseman', [ApiController::class, 'registerWarehouseman']);
Route::post('/registerPostman', [ApiController::class, 'registerPostman']);
Route::post('/getPackagesForUser', [ApiController::class, 'getPackagesForUser']);
Route::post('/getAllPackages', [ApiController::class, 'getAllPackages']);
Route::post('/getLogistics', [ApiController::class, 'getLogistics']);
Route::post('/getPackageDetails', [ApiController::class, 'getPackageDetails']);
Route::get('/getAllCities', [ApiController::class, 'getAllCities']);
Route::get('/getAllWarehouses', [ApiController::class, 'getAllWarehouses']);
Route::post('/changeStatusOfPackage', [ApiController::class, 'changeStatusOfPackage']);
Route::post('/createNewPackage', [ApiController::class, 'createNewPackage']);
Route::post('/editPackage', [ApiController::class, 'editPackage']);
Route::post('/reportLostPackage', [ApiController::class, 'reportLostPackage']);
Route::post('/deletePackage', [ApiController::class, 'deletePackage']);
Route::post('/getAllPostmenLocation', [ApiController::class, 'getAllPostmenLocation']);
Route::post('/changePayAndRole', [ApiController::class, 'changePayAndRole']);
Route::get('/getAllUsersReqPassChange', [ApiController::class, 'getAllUsersReqPassChange']);
Route::post('/changePassword', [ApiController::class, 'changePassword']);
Route::post('/denyPasswordChange', [ApiController::class, 'denyPasswordChange']);
Route::post('/storeImage', [ApiController::class, 'storeImage']);
