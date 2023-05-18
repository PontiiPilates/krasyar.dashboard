<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GetDataApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// для ит отдела
Route::get('/pie', [GetDataApiController::class, 'pie']);
Route::get('/stackedbar', [GetDataApiController::class, 'stackedBar']);
Route::get('/speed', [GetDataApiController::class, 'speed']);
Route::get('/table', [GetDataApiController::class, 'table']);
Route::get('/valuesset', [GetDataApiController::class, 'valuesSet']);

// для техподдержки
Route::get('/pie_tpod', [GetDataApiController::class, 'pieTPod']);
Route::get('/stackedbar_tpod', [GetDataApiController::class, 'stackedBarTPod']);
Route::get('/speed_tpod', [GetDataApiController::class, 'speedTPod']);
Route::get('/table_tpod', [GetDataApiController::class, 'tableTPod']);
Route::get('/valuesset_tpod', [GetDataApiController::class, 'valuesSetTPod']);