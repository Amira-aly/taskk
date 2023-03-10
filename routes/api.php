<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
// get all posts
Route::get('/posts',[ApiController::class ,'index']);
// get post by id
Route::get('/posts/{id}',[ApiController::class ,'show']);
// add post
Route::post('/posts',[ApiController::class ,'store']);
// update post
Route::put('/posts/{id}',[ApiController::class ,'update']);
// delete post
Route::delete('/posts/{id}',[ApiController::class ,'destroy']);

