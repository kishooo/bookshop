<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasherController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\PrintingController;
use App\Http\Controllers\ReceiptsController;
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

Route::get('/',[CasherController::class,'index']);
Route::get('/test',[CasherController::class,'taswer']);
Route::post('/recipte',[ReceiptsController::class, 'insertReceipt']);
