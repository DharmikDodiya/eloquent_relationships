<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showComment()
    {
        $comments = Post::find(1)->comments;
  
        return $comments;
    }

    public function showPost(){
        $post = Comment::find(2)->post;

        return $post;
    }
}
