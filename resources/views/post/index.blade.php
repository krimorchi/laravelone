@extends('layouts.general')
@section('posts')
    <div class="container">
        <div class="posts">
            @if (isset($post))
            <div class="card" style="width: 18rem;">
                <div class="title">{{$post->title}}</div>
                <div class="card-body">
                    <p class="card-text">{{$post->post_content}}</p>
                </div>
                <div class="likes">{{$post->likes}}</div>
                <a href=" {{ route('post.edit', $post->id) }} " class="post_link">Редактировать статью</a>
                <a href=" {{ route('post.index') }} " class="post_link">Вернуться на главную</a>
                <form action=" {{ route('post.delete', $post->id) }} " method='post'>
                    @csrf
                    @method('delete')
                    <input class="delete-post" type="submit" value="Удалить статью">
                </form>
            </div>
            

            @elseif(isset($posts))
                @foreach($posts as $post)
                    <a href=" {{ route('post.show', $post->id) }} ">
                        <div class="card" style="width: 18rem;">
                            <div class="title">{{$post->title}}</div>
                            <div class="card-body">
                                <p class="card-text">{{$post->post_content}}</p>
                            </div>
                            <div class="likes">{{$post->likes}}</div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endsection