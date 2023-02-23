<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $data = Post::find($id)->comments;
        return view('showcomment',['data'=> $data]);
    }

    public function showPost($id){
        $data = Comment::find($id)->post;
        return view('showpost',['data' => $data]);
    }

}
