<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Posts extends Controller
{

    public function getPost($numero)
    {
        return view('post',['id' => $numero]);
    }

    public function createPost()
    {
        return view('create_post');
    }

    public function misPosts()
    {
        $posts = ['Post 1','Post 2','Post 3'];

        return  view('mis_posts',compact('posts'));
    }


}
