<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index'])->name('postslist');
Route::get('/posts/{id}/index', [PostController::class, 'postDetails'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/', [PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{id}/index',[CommentController::class,'create'])->name('comments.create');

