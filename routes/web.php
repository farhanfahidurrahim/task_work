<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog-post/{id}', [App\Http\Controllers\HomeController::class, 'blogPost'])->name('blog.post');
Route::post('/comment/store', [App\Http\Controllers\HomeController::class, 'commentstore'])->name('comment.store');

//___Admin Route
Route::group(["middleware"=>'only_admin'],function(){

    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home');
    Route::get('/admin/logout', [App\Http\Controllers\HomeController::class, 'adminLogout'])->name('admin.logout');

    Route::get('/category/all', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/post/all', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('post.store');
    Route::get('/post/edit/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('post.edit');
    Route::post('/post/update/{id}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('post.update');
    Route::get('/post/delete/{id}', [App\Http\Controllers\Admin\PostController::class, 'delete'])->name('post.delete');

    Route::get('/comment/all', [App\Http\Controllers\Admin\CommentController::class, 'index'])->name('commnt.index');
    Route::get('/comment/delete/{id}', [App\Http\Controllers\Admin\CommentController::class, 'delete'])->name('comment.delete');

});


