<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){

      return view('post-index');
    }

    public function create() {
      return view('post-create');
    }
    public function store(Request $request) {

      $valData = $request -> validate([
        'title' => 'required|unique:posts|min:2',
        'content' => 'required | max:50',
        'like'=> 'required|gte:0',
        'dislike' => 'required|gte:0'
    ]);;


      $post = Post::create($valData);

      return redirect()-> route('post-index');
    }
}
