<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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


// admin panel routes
Route::get('/admin',[DashboardController::class,'index']);
//posts
Route::get('/admin/posts',[PostController::class,'index'])->name('post.index');
Route::get('/admin/posts/show',[PostController::class,'show'])->name('post.show');
Route::post('/admin/posts/save',[PostController::class,'save'])->name('post.save');
//category
Route::get('/admin/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/admin/category/show' , [CategoryController::class,'show'])->name('category.show');
Route::post('/admin/category/save' , [CategoryController::class,'store'])->name('category.save');
Route::get('/admin/category/edit/{category}' , [CategoryController::class,'edit'])->name('category.edit');





