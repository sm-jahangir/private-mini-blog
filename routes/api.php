<?php

use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// For Post
Route::get('/posts', [PostController::class, 'index']);

// For Single Post. Post by slug 
Route::get('/posts/{slug}', [PostController::class, 'show']);

// For Popular Post
Route::get('/posts/popular', [PostController::class, 'popular']);

// For Category
Route::get('/category', [PostController::class, 'categories']);

// For Category By Posts show
Route::get('/category/{slug}', [PostController::class, 'categorybypost']);

// For Tags
Route::get('/tag', [PostController::class, 'tag']);

// For Tag wise Post
Route::get('/tag/{slug}', [PostController::class, 'tagbypost']);

// For Users
Route::get('/users', [UserController::class, 'index']);
Route::get('search/user/{field}/{query}', [UserController::class, 'search']);