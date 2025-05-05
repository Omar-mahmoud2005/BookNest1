<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/post',[PostController::class,'index'])->name('post.index');

Route::get('/post/view',[PostController::class,'view'])->name('post.view');

Route::get('/post/view2',[PostController::class,'view2'])->name('post.view2');
