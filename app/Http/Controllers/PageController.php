<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts(){
        return view('posts',[
            //metodo with de eloquent
            //para utilizar load se debe crear una consulta
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }
    public function post(Post $post){
        return view('post',[
            'post' => $post
        ]);
    }
}
