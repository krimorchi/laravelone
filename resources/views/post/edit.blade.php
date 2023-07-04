@extends('layouts.general')
@section('edit')
    <div class="container">
        <div class="edit">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                <div class="mb-3">
                  @csrf
                  @method('patch')
            
                  <div class="form-group">
                    <label for="title" class="form-label">Заголовок статьи</label>
                    <input name="title" type="text" class="form-control" id="title" value=" {{ $post->title }} ">
                    <div id="TitleHelp" class="form-text">Укажите, какой заголовок статьи Вы хотите задать</div>

                    @error('title')
                    <p class="text-warning">{{ $message}}</p>
                    @enderror
                  </div> 

                  <div class="form-group">
                    <label for="post_content" class="form-label">Текст статьи</label>
                    <textarea name="post_content" type="text" class="form-control" id="post_content">{{ $post->post_content }}</textarea>
                    <div id="Post_ContentHelp" class="form-text">Укажите текст статьи</div>

                    @error('title')
                    <p class="post_content">{{ $message}}</p>
                    @enderror
                  </div> 

                  <div class="form-group">
                    <label for="image" class="form-label">Картинка</label>
                    <input name="image" type="text" class="form-control" id="image" value=" {{ $post->image }} ">
                    <div id="ImageHelp" class="form-text">Укажите название картинки</div>

                    @error('title')
                    <p class="image">{{ $message}}</p>
                    @enderror
                  </div> 

                  <div class="form-group">
                    <label for="category_id" class="form-label">Выберите категорию статьи</label>
                    <select class="form-select" name="category_id" id="category_id">
                      @foreach($categories as $category)
                            <option
                              {{$category->id == $post->category_id ? ' selected' : ''}}
                            value="{{ $category->id }}" >{{ $category->title }}</option>
                      @endforeach
                    </select>
                  </div> 

                  <div class="form-group">
                    <div class="tag-selection">
                      <label for="tags" class="form-label">Тэги</label>
                      <select multiple class="form-select" id="tags" name="tags[]">
                          @foreach($tags as $tag)
                          <option
                            @foreach($post->tags as $postTag)
                              {{$tag->id == $postTag->id ? ' selected' : ''}}
                            @endforeach 
                            value="{{ $tag->id }}" >{{ $tag->title }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div> 
                </div>
                <button type="submit" class="btn btn-primary">Обновить статью</button>
              </form>
        </div>
    </div>
@endsection