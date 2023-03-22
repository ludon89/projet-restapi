<?php

use App\Http\Controllers\API\HearingAidController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource("hearingaids", HearingAidController::class);

// Route::get('/hearingaids/{id}', [HearingAidController::class, "show"]);




/////////////////// TEST ///////////////////

Route::get("test", function () {
    return "test";
});

/////////////////// UNUSED ///////////////////

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('hearingaids', HearingAidController::class);
