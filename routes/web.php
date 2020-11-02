<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () { return view('welcome');});


//index
Route::get('index',[PostsController::class,'index'])->name('home.index');

//show
Route::get('post',[PostsController::class,'post'])->name('post.index');

//about
Route::get('about',[PostsController::class,'about'])->name('about.index');


