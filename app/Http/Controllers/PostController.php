<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;


class PostController extends Controller
{
   public function index(){

    $posts = Post::get();

    return view('posts.index', ['posts'=> $posts]);
   }

   public function create()
   {
    return view('posts.create', ['post'=> new Post]);
   }

   public function show(Post $post)
   {
    return view('posts.show', ['post'=> $post]);
   }

   public function store(SavePostRequest $request)
   {
        Post::create($request->validated());

        session()->flash('status','Post created');

        return to_route('posts.index');

   }

   public function edit(Post $post)
   {
    return view('posts.edit', ['post'=> $post]);
   }

   public function update(SavePostRequest $request, Post $post)
   {
         $post->update($request->validated());

    return to_route('posts.show', $post)->with('status','Post edited succesfuly');
   }

   public function destroy(Post $post)
   {
      $post->delete();

      return to_route('posts.index')->with('status','Post deleted');
   }
}