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

Route::group(['prefix'=>'admin/post'] , function(){
    Route::get('/',[PostController::class,'index'])->name('post.index');
    Route::get('/show',[PostController::class,'show'])->name('post.show');
    Route::post('/save',[PostController::class,'save'])->name('post.save');
    Route::get('/edit/{post}',[PostController::class,'edit'])->name('post.edit');
    Route::put('/update/{post}',[PostController::class,'update'])->name('post.update');
    Route::delete('/delete/{post}',[PostController::class,'delete'])->name('post.delete');

});

//category
Route::group(['prefix'=>'admin/category'], function(){

    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/show' , [CategoryController::class,'show'])->name('category.show');
    Route::post('/save' , [CategoryController::class,'store'])->name('category.save');
    Route::get('/edit/{category}' , [CategoryController::class,'edit'])->name('category.edit');
    Route::put('/update/{category}' , [CategoryController::class,'update'])->name('category.update');
    Route::delete('/delete/{category}' , [CategoryController::class,'delete'])->name('category.delete');

});






