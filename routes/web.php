<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\Comment;

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
    //Post::destroy(3,5,7);


    //$allPosts = Post::all();
    //dd($allPosts);

    //$featuredPosts = Post::where('is_feature',1)->get();
    //dd($featuredPosts);

    //$fourthPost=Post::find(4);
    //dd($fourthPost);

    //$lastPost=Post::orderBy('id','DESC')->first();
    //dd($lastPost);

    $post= Post::find(4);
    foreach($post->comments as $comment){
        echo $comment->content.'<br>';
    }


});


//posts
Route::get('posts',[PostsController::class,'posts'])->name('posts.index');

//show
Route::get('post',[PostsController::class,'post'])->name('post.index');

//about
Route::get('about',[PostsController::class,'about'])->name('about.index');

//contact
Route::get('contact',[PostsController::class,'contact'])->name('contact.index');



