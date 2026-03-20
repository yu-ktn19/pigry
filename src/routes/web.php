<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PigryController;

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

Route::get('/register/step1', [PigryController::class, 'create1']);
Route::post('/register/step2', [PigryController::class, 'create2']);
Route::get('/weight_logs', [PigryController::class, 'index']);
Route::post('/weight_logs', [PigryController::class, 'index']);
Route::get('/login', [PigryController::class, 'create3']);
Route::post('/login', [PigryController::class, 'create3']);
Route::get('/weight', [PigryController::class, 'create4']); /*weight_logs/{:weightLogId}*/
Route::post('/wight_logs/goal_setting', [PigryController::class, 'create5']);
Route::get('/weight_logs/create', [PigryController::class, 'create6']); 