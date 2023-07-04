<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function main() 
    {
        $posts = Post::all();
        return view('main');
    }
}
