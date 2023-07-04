@extends('layouts.general')
@section('create')
    <div class="container">
        <div class="create">
            <form action="{{ route('post.store') }}" method="post">
                <div class="mb-3">
                  @csrf
                  <div class="form-group">
                    <label for="title" class="form-label">Заголовок статьи</label>
                    <input name="title" value={{ old('title', 'Заголовок' ) }} type="text" class="form-control" id="title">
                    <div id="TitleHelp" class="form-text">Укажите, какой заголовок статьи Вы хотите задать</div>

                    @error('title')
                    <p class="text-warning">{{ $message}}</p>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="post_content" class="form-label">Текст статьи</label>
                    <textarea name="post_content" type="text" class="form-control" id="post_content">{{ old('post_content', 'Вставьте текст') }}</textarea>
                    <div id="Post_ContentHelp" class="form-text">Укажите текст статьи</div>

                    @error('post_content')
                    <p class="text-warning">{{ $message}}</p>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="image" class="form-label">Картинка</label>
                    <input name="image" value={{ old('image', 'Картинка') }} type="text" class="form-control" id="image">
                    <div id="ImageHelp" class="form-text">Укажите название картинки</div>
                    
                    @error('image')
                    <p class="text-warning">{{ $message}}</p>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="category" class="form-label">Выберите категорию статьи</label>
                    <select class="form-select" aria-label="Выберите категорию статьи" id="category" name="category_id">
                      @foreach($categories as $category)
                              <option 
                              {{ old('category_id') == $category->id ? ' selected' : '' }}
                              value="{{ $category->id }}" >{{ $category->title }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <div class="tag-selection">
                      <label for="tags" class="form-label">Тэги</label>
                      <select multiple class="form-select" id="tags" name="tags[]">
                          @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Создать статью</button>
              </form>
      </div>
  </div>
@endsection