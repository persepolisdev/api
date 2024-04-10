<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {



        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category = 1;
        $post->is_draft = 0 ?? false;
        $post->image = 'ASDASD'; // Assuming this is just a placeholder



        $post->save();

        return response()->json(['message' => 'Post created successfully'], 201);
    }

    Public function  showda(){

        $users = Post::all();
        return response()->json($users,200);

    }
}
