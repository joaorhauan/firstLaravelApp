<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function list()
    {
        return Post::all()->load('user');
    }

    public function listById(int $id)
    {
        return Post::find($id)->load('user');
    }

    public function create(Request $req)
    {
        $data = $req->all();
        return Post::create($data);
    }

    public function edit(Request $req, int $id)
    {
        $post = Post::find($id);
        $post->update($req->all());
        return $post;
    }

    public function delete(int $id)
    {
        $post = Post::find($id);
        $post->delete();
        return $post;
    }
}
