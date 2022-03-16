<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/iti',function(){

    return view('iti');
});

// Route::get("/exa1", function(){
//     $name = "laravel";
//     return $name;
// });

// Route::get("/exa2/{id}", function($id){
   
//     return $id;
// });

// Route::get("/exa3",function(){
//        $posts=[
//            "post1"=>"test1",
//            "post2"=>"test2",
//            "post3"=>"test3"
//        ];

//        return $posts;
// });

Route::get("exa4/{post}",function($post){
       $posts=[
           "post1"=>"test1",
           "post2"=>"test2",
           "post3"=>"test3"
       ];
       return $posts[$post];
});


Route::get("/request", function(){
    $req = request();

    return dump($req);
});

// Route::get("posts",function(){
//     $posts=[
//         "post1"=>"test1",
//         "post2"=>"test2",
//         "post3"=>"test3"
//     ];
//     return view("posts", ["data"=> $posts]);
// });

// Route::get("posts/{post}",function($post){
//     $posts=[
//         "post1"=>"test1",
//         "post2"=>"test2",
//         "post3"=>"test3"
//     ];
//     return view("posts", ["data"=> $posts[$post]]);
// });

Route::get("posts",function(){
    $posts=[
        ["title"=>"post1","description" => "test1"],
        ["title"=>"post2", "description" => "test2"],
        ["title"=>"post3","description" => "test3"],
    ];
    return view("posts", ["data"=> $posts]);
});

Route::get("posts/{postid}",function($postId){

    return view("operations.show",["postId" => $postId]);
});





























