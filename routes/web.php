<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ParseController::class, 'index']);

Route::get('/pie', [App\Http\Controllers\ParseController::class, 'pie']);
Route::get('/stackedbar', [App\Http\Controllers\ParseController::class, 'stackedBar']);
Route::get('/speed', [App\Http\Controllers\ParseController::class, 'speed']);
Route::get('/table', [App\Http\Controllers\ParseController::class, 'table']);
Route::get('/valuesset', [App\Http\Controllers\ParseController::class, 'valuesSet']);
