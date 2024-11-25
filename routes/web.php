<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
  //外部にあるPostControllerクラスを使えるようにします。
  Route::get('/', function () { return view('welcome'); });

Route::get('/posts', [PostController::class, 'index']);   
Route::get('/posts/{post}', [PostController::class ,'show']);