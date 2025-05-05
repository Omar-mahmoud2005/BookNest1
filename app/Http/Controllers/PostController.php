<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }

    public function view(){
        return view('post.view');
    }

    public function view2(){
        return view('post.view2');
    }

}
