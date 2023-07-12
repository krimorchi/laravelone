<?php

use Illuminate\Support\Facades\Route;

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


// MAIN ROUTES

Route::get('/', 'App\Http\Controllers\MainController@main'
);

Route::get('/main', 'App\Http\Controllers\MainController@main'
);

// POSTS ROUTES

Route::group(['namespace' => '\App\Http\Controllers\Post'], function() {
    Route::get('/posts', 'IndexController'
    )->name('post.index');

    Route::get('/posts/create', 'CreateController'
    );

    Route::post('/posts/store', 'StoreController'
    )->name('post.store');

    Route::get('/posts/{post}', 'ShowController'
    )->name('post.show');

    Route::get('/posts/{post}/edit', 'EditController'
    )->name('post.edit');

    Route::patch('/posts/{post}', 'UpdateController'
    )->name('post.update');

    Route::delete('/posts/{post}', 'DestroyController'
    )->name('post.delete');

    Route::get('/posts/restore', 'RestoreController'
    );
});



// ABOUT ROUTES

Route::get('/about', 'App\Http\Controllers\AboutController@about'
);

// CONTACTS ROUTES

Route::get('/contacts', 'App\Http\Controllers\ContactsController@contacts'
);








