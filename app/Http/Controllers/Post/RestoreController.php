<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Http\Controllers\Controller;

class RestoreController extends Controller
{
    public function __invoke()
    {
        $post = Post::withTrashed()->find(8);
        $post->restore();
        return ('Restored');
    }
}