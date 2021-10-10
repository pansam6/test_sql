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

<<<<<<< HEAD
Route::get("/test2", [ProdcutController::class, "test2"]);
Route::get("/test3", [ProdcutController::class, "test3"]);
Route::get("/test4", [ProdcutController::class, "test4"]);
=======

>>>>>>> 9a20876ffffced5a92b4fa060d402cd595bc1dfd
