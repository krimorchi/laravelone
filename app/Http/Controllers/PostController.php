<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\PostTag;

class PostController extends Controller
{
    public function index()
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

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'required|string',
            'image' => 'required|string',
            'category_id' => '',
            'tags' =>'',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);

        $post->tags()->attach($tags);  //лучше использовать этот вариант

        // foreach($tags as $tag){
        //     PostTag::firstOrCreate([
        //         'tag_id' => $tag,
        //         'post_id' => $post->id,
        //     ]);
        // };

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.index', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags',));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'required|string',
            'image' => 'required|string',
            'category_id' => '',
            'tags' =>'',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);

        $post->tags()->sync($tags); 
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(8);
        $post->restore();
        return ('Restored');
    }
}
