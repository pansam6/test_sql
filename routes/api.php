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

<<<<<<< HEAD
Route::get('/product', []);
=======
Route::get("/get", [ProdcutController::class, "test"]);
<<<<<<< HEAD
>>>>>>> 42878293cce92a89c7d7fec23d8e37d9b20e7950
=======

Route::get("/test2", [ProdcutController::class, "test2"]);
>>>>>>> 7bd754361fd0815bac16ba0f6eb6ddbf7296b00f
