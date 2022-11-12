<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasherController;
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
Route::get('/recipte',[CasherController::class,'recipte']);
