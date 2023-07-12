<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Post\BaseController;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
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


        // ФИЛЬТРАЦИЯ ПОСТОВ ПО title, post_content, category_id

        // $request = FilterRequest::class;

        // FilterRequest $request

        $data = $request->validated();

        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

        $posts = Post::filter($filter)->paginate(12);

        //ОБЫЧНАЯ СТРАНИЦА С ПОСТАМИ

        // $posts = Post::paginate(12);

        return view('post.index', compact('posts'));
    }

}