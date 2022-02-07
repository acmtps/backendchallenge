<?php

use App\Http\Controllers\DateController;
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

//API ROUTES 
//ALL ROUTES ARE POST METHOD
Route::post('getdaydiff',[DateController::class, 'getDayDiffNumber']);
Route::post('getweeknumber',[DateController::class, 'getWeekDiffNumber']);
Route::post('getconverteddate',[DateController::class, 'conventIntoFormat']);
Route::post('getconvertedtimezone',[DateController::class, 'compareTimeZone']);
Route::post('getweekdays',[DateController::class, 'getWeeksDays']);





