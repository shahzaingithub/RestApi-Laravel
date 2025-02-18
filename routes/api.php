<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; 
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

Route::get('post',[PostController::class,'index']);
Route::post('post',[PostController::class,'store']);
Route::get('post/{post}',[PostController::class,'show']);
Route::post('post/{post}',[PostController::class,'update']);
Route::delete('post/{post}',[PostController::class,'destroy']);

