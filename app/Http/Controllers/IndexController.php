<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){

        $data = Post::latest()->paginate(5);
        return view('posts.index',compact('data'))
                ->with('i',(request()->input('page', 1) -1) * 5);
    }
}
