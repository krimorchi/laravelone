<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MySecondPlaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/second', [MySecondPlaceController::class, 'secondIndex']
)->name('secondIndex');

Route::get('/post', 'App\Http\Controllers\PostController@findById'
);

Route::get('/posts/titles', 'App\Http\Controllers\PostController@findAllTitles'
);

Route::get('/post/title', 'App\Http\Controllers\PostController@findTitleById'
);

Route::get('/posts/morelikes', 'App\Http\Controllers\PostController@findWhereMoreLikes'
);

Route::get('/posts/create', 'App\Http\Controllers\PostController@create'
);

Route::get('/posts/update', 'App\Http\Controllers\PostController@update'
);

Route::get('/posts/delete', 'App\Http\Controllers\PostController@delete'
);

Route::get('/posts/restore', 'App\Http\Controllers\PostController@restore'
);

Route::get('/posts/firstOrCreate', 'App\Http\Controllers\PostController@firstOrCreate'
);

Route::get('/posts/updateOrCreate', 'App\Http\Controllers\PostController@updateOrCreate'
);


// MAIN ROUTES

Route::get('/', 'App\Http\Controllers\MainController@main'
);

Route::get('/main', 'App\Http\Controllers\MainController@main'
);

Route::get('/posts', 'App\Http\Controllers\PostController@index'
)->name('post.index');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create'
);

Route::post('/posts', 'App\Http\Controllers\PostController@store'
)->name('post.store');

Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show'
)->name('post.show');

Route::get('/posts/{post}/edit', 'App\Http\Controllers\PostController@edit'
)->name('post.edit');

Route::patch('/posts/{post}', 'App\Http\Controllers\PostController@update'
)->name('post.update');

Route::delete('/posts/{post}', 'App\Http\Controllers\PostController@destroy'
)->name('post.delete');

Route::get('/posts/restore', 'App\Http\Controllers\PostController@restore'
);

Route::get('/about', 'App\Http\Controllers\AboutController@about'
);

Route::get('/contacts', 'App\Http\Controllers\ContactsController@contacts'
);








