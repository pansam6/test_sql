<?php

use App\Http\Controllers\ProdcutController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/get", [ProdcutController::class, "test"]);

Route::get("/test2", [ProdcutController::class, "test2"]);
Route::get("/test3", [ProdcutController::class, "test3"]);
Route::get("/test4", [ProdcutController::class, "tasfasf4"]);
Route::get("/test4", [ProdcutController::class, "asffs"]);
Route::get("/test4", [ProdcutController::class, "test54"]);
