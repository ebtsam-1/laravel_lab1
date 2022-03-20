<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $posts=[
        //     ["title"=>"post1","description" => "test1"],
        //     ["title"=>"post2", "description" => "test2"],
        //     ["title"=>"post3","description" => "test3"],
        // ];
        $posts = Post::all();
        return view("posts", ["data"=> $posts]);
    }


    public function getPostId($postId){

        $post = new Post;

        $post = $post->find($postId);

        return view("operations.show",["data" => $post]);
    }

    public function create(){
        //  dd("Hello");
        return view("operations.create");
    }

    public function store(){
        
        $post = new Post;

        $post->title = request("title");
        $post->body = request("body");
        $post->slug = request("slug");
        $post->save();

        return redirect('/posts');
    }

    public function edit($postId){
        $post = Post::findorfail($postId);

        return view("operations.edit",["data" => $post]);
    }

    public function update($postId){
        
        $post = Post::findorfail($postId);

        $post->title = request("title");
        $post->body = request("body");
        $post->slug = request("slug");
        $post->save();

        return redirect('/posts');
    }

    public function delete($postId){
         $post = new Post;
         $post = $post->findorfail($postId);
         $post ->delete();
         return redirect('/posts');
    }
}
