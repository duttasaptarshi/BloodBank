<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['body'=>'required|max:500']);
        Blog::create([
            'user_id'=> auth()->id(),
            'body' => $attributes['body']
        ]);
        return redirect('/home');
    }
}
