<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaginationController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'home']);
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::resource('categories', CategoryController::class);

Route::get('/posts/paginated', [PaginationController::class, 'index'])->name('posts.paginated');















