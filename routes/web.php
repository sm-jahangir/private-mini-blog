<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [IndexController::class, 'index'])->name('index.post');
Route::get('/blog/{slug}', [IndexController::class, 'show'])->name('index.show');
Route::get('/category/{slug}', [IndexController::class, 'categorybypost'])->name('index.categorybypost');
Route::get('/tag/{slug}', [IndexController::class, 'tagbypost'])->name('index.tagbypost');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('blank', 'backend.blank')->name('blank');
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('page', PageController::class);
    Route::view('401', 'backend.401')->name('401');
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);

    Route::get('newsletter', [NewsletterController::class, 'index'])->name('newsletter');
    Route::post('newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
    Route::delete('newsletter/{newsletter}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');
    Route::resource('social', SocialController::class)->only('create', 'store');

});