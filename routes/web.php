<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/upload', [SalesController::class, 'index']);
Route::post('/upload', [SalesController::class, 'upload']);
Route::get('/batch', [SalesController::class, 'batch']);
Route::get('/batch/in-progress', [SalesController::class, 'batchInProgress']);
