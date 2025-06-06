@extends('layouts.main')
@section('content')
<div>
    <form action="{{route('review.update', $review->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="mb-3">
          <label for="title" class="form-label">Название обзора</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$review->title}}"></input>
      </div>
      <div class="mb-3">
          <label for="content" class="form-label">Текст обзора</label>
          <textarea class="form-control" name="content" id="content" placeholder="Content">{{$review->content}}</textarea>
      </div>
      <div>
          <label for="category">Категория</label>
          <select class="form-select" id="category" name="category_id">
            @foreach ($categories as $category)
            <option {{ $category->id === $review->category_id ? ' selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
      </div>

      <div class="mb-3">
          <label for="image">Фото</label>
          <input type="file" multiple name="image[]" class="form-control" id="image" placeholder="Image" accept=".png, .jpg, .jpeg"></input>
          @error('image')
          <p class="text-danger">Ошибка с добавлением фото</p>
          @enderror
      </div>
        
        <button type="submit" class="btn btn-primary mb-3">Изменить</button>

        <hr>
      @foreach ($review->getMedia('reviews') as $image)
      <div>
        <img src="{{$image->getUrl()}}"></img>
      </div>
      <hr>

    @endforeach
    </form>
  </div>  
@endsection