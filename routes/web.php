<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;

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

Route::get('/', function () { //return view('welcome');
    $post = new Post();
    $post->title ='test title';
    $post->content ='test content';
    $post->save();

});


//posts
Route::get('posts',[PostsController::class,'posts'])->name('posts.index');

//show
Route::get('post',[PostsController::class,'post'])->name('post.index');

//about
Route::get('about',[PostsController::class,'about'])->name('about.index');

//contact
Route::get('contact',[PostsController::class,'contact'])->name('contact.index');

