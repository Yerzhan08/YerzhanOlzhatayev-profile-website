<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class BlogController extends Controller
{
    public function index(){
        $post = post::all();
        return view('blog.index')->with(['post' => $post]);
}
}
