<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // ПОИСК ПО ОТНОШЕНИЯМ ОДИН К МНОГИМ И МНОГИЕ К МНОГИМ
        // $tag = Tag::find(1);
        // dd($tag->posts);

        // $post = Post::find(5);
        // dd($post->tags);

        // $post = Post::find(3);
        // dd($post->category_id);

        // $category = Category::find(2);
        // dd($category->posts);

        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

}