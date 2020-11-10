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
    //$post = new Post();
    //$post->title ='test title';
    //$post->content ='test content';
    //$post->save();

    Post::create([
        'title'=>'test title',
        'content'=>'test content',
    ]);
//以下三個是查詢資料
    //$posts = Post::all();
    //dd($posts);

    //$post = Post::find(1);
    //dd($post);

    //$posts = Post::where('id','<',10)->orderBy('id','DESC')->get();
    //dd($posts);

    //UPDATE
    //$post = Post::find(1);
    //$post->update([
        //'title'=>'updated title',
        //'content'=>'updated content',
    //]);

    //save
    //$post = Post::find(1);
    //$post->title='saved title';
    //$post->content='saved content';
    //$post->save();

    //delete
    //$post = Post::find(1);
    //$post->delete();

    //destroy
    //Post::destroy(2);


    //destroy multi
    Post::destroy(3,5,7);



});


//posts
Route::get('posts',[PostsController::class,'posts'])->name('posts.index');

//show
Route::get('post',[PostsController::class,'post'])->name('post.index');

//about
Route::get('about',[PostsController::class,'about'])->name('about.index');

//contact
Route::get('contact',[PostsController::class,'contact'])->name('contact.index');

