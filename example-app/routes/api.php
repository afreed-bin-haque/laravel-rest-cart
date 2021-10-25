<?php

use App\Http\Controllers\Api\ColorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductDetailController;
use App\Http\Controllers\Api\SizeController;

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
Route::get('/orders/list',[OrderController::class,'index']);
Route::post('/orders/post',[OrderController::class,'store']);
Route::get('/product/list',[ProductDetailController::class,'index']);
Route::post('/product/post',[ProductDetailController::class,'store']);
Route::get('/color/list',[ColorController::class,'index']);
Route::post('/color/post',[ColorController::class,'store']);
Route::get('/size/list',[SizeController::class,'index']);
Route::post('/size/post',[SizeController::class,'store']);
