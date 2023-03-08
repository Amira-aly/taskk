<?php

use App\Http\Controllers\CarouselController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

// get all posts
Route::get('/all_posts',[PostController::class,'index']);
// add post
Route::get('/post/add',[PostController::class,'add']);
// create post
Route::post('post/create',[PostController::class],'create')->name('post.create');
// delete post
Route::delete('/posts/delete/{id}', [PostController::class ,'destroy'])
    ->name('posts.destroy');
// show post
Route::get('/posts/show/{id}', [PostController::class ,'show'])
    ->name('posts.show');
// edit post
Route::get('post/edit/{id}', [PostController::class, 'edit']);
// update post
Route::put('post/update/{id}', [PostController::class, 'update']);
// delete carousel
Route::delete('/carousel/delete/{id}', [CarouselController::class ,'destroy'])
    ->name('carousel.destroy');
