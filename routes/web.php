<?php

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

Route::get('/', function () {
    //return view('welcome');
//    \App\Post::create([
//        'title'=>'test title',
//        'content'=>'test content'
//    ]);

//    $post = new \App\Post();
//    $post->title = 'test title2';
//    $post->content = 'test content2';
//    $post->save();

//    $posts = \App\Post::all();
//    dd($posts);

//    $post = \App\Post::find(1);
//    dd($post);

//    $post=\App\Post::where('id', '<', 10)->orderBy('id','DESC')->get();
//    dd($post);

//    $post = \App\Post::find(1);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);

//    $post = \App\Post::find(1);
//    $post->title = 'saved title';
//    $post->content = 'savted content';
//    $post->save();

//    $post = \App\Post::find(1);
//    $post->delete();


//    $allPosts = \App\Post::all();
//    dd($allPosts);

//    $featuredPosts = \App\Post::where('is_feature', 1)->get();
//    dd($featuredPosts);

//    $post = \App\Post::find(4);
//    dd($post);

//    $lastPost = \App\Post::orderBy('id', 'DESC')->first();
//    dd($lastPost);

//    $post = \App\Post::find(6);
//    echo $post->id.'   '.$post->title.'<br><hr>';
//    foreach($post->comments as $comment) {
//        echo '*'.$comment->content.'<br>';
//    }


//    foreach($allPosts as $post) {
//        echo '<br><hr>'.$post->id.'   '.$post->title.'<br><hr>';
//        foreach($post->comments as $comment) {
//            echo '*'.$comment->content.'<br>';
//        }
//    }
//    return view('index', ['posts'=>$allPosts]);


    $post = new \App\Post();    // Create a new Post
    $post->title = 'test title99';
    $post->content = 'test content99';
    $post->save();              //Save the new Post

    // Suppose the new Post has the following three new Comments
    $comments=[
        [
            'content'=> 'comment1'
        ],
        [
            'content'=> 'comment2'
        ],
        [
            'content'=> 'comment3'
        ],
    ];


    foreach($comments as $comment){
        $post->comments()->create($comment);  //To save the new Post's Comment

    };





});

Route::get('/post/{id}', function ($id){
    $post = \App\Post::find($id);
    return view('post', ['post'=>$post]);
})->name('post.show');

Route::resource('post.comment', 'CommentsController', ['only' => ['store', 'destroy']]);

Route::get('/home', 'HomeController@index');

Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);

Route::get('/posts', function (){
   return view('posts.index');
});
Route::get('/posts/about', function (){
    return view('posts.about');
});
Route::get('/posts/post', function (){
    return view('posts.post');
});