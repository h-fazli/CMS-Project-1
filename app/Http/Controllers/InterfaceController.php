<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function index()
    {
        $posts = \App\Models\Post::where('isActive',true)->with(['tags','categories','authors'])->get();
        return view('posts.index',compact('posts',$posts));
    }
}
